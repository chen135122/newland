<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Study;
use App\Models\StudySP;
use App\Models\Travel;
use App\Models\Property;
use App\Models\Article;
use App\Models\Faq;
use App\Http\Requests;
use Overtrue\Wechat\QRCode;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use App\Models\Partner;
use SebastianBergmann\Comparator\FactoryTest;


class SearchController extends Controller
{
    public function index()
    {
        include 'wxcode.php';
        $search_key = request()->get('search_key');
        $page = request()->get('page');
//        if(!$page) $page=1;
        $allUrl= $this->qrcode();
        $results=[];
        $row=0;
        $search_key = trim($search_key);
        if( strlen( $search_key) > 0){
            $properties = Property::where('publish','1')->where('status', '!=', 10)->where('status', '!=', 14);
            $properties=$properties->where('title','like','%'.$search_key.'%')->get();

            $travels = Travel::where('publish','1');
            $travels = $travels->where('title','like','%'.$search_key.'%');
            $travels = $travels->orderBy("displayorder","asc")->get();

            $studys = Study::where("publish",1);
            $studys = $studys->where('cn_name','like','%'.$search_key.'%')->get();


            $StudySPS = StudySP::where("publish",1);
            $StudySPS = $StudySPS->where('name','like','%'.$search_key.'%')->get();


            $articles = Article::where('publish',1);
            $articles =$articles->where('title','like','%'.$search_key.'%');
            $articles =$articles->orwhere('abstract','like','%'.$search_key.'%');
            $articles =$articles->orwhere('author','like','%'.$search_key.'%');
            $articles =$articles->orwhere('content','like','%'.$search_key.'%');
            $articles =$articles->orderBy('displayorder', 'asc')->get();

            $partners = Partner::where('title','like','%'.$search_key.'%');
            $partners =$partners->orderBy('displayorder', 'asc')->get();

            $faqs = Faq::where('title','like','%'.$search_key.'%');
            $faqs =$faqs->orderBy('displayorder', 'asc')->get();

            foreach($properties as $property){
                $short_info='';
                $results[$row]['url']='/property/'.$property->id;
                $results[$row]['title']=$property->title;
                $results[$row]['picurl']=$property->picurl;
                $results[$row]['module']='房产置业';
                if(isset($property->regions))
                    $short_info=$property->regions->name.'&nbsp;';

                if(isset($property->regions_city))
                    $short_info.=$property->regions_city->name.'&nbsp;';

                if(isset($property->regions_district))
                    $short_info.=$property->regions_district->name.'&nbsp;';

                $results[$row]['short_info']='<p>'.$short_info.'</p>';

                $row++;
//               array_push($results);
            }

            foreach($travels as $travel){
                $short_info='';
                if(!empty($travel->introduction))
                   $short_info=strip_tags($travel->introduction);
                else
                    $short_info=$travel->title;

                $results[$row]['url']='/tour/'.$travel->id;
                $results[$row]['title']='<strong>【'.$travel->bigtitle.'】</strong>'.$travel->title;
                $results[$row]['picurl']=$travel->picurl;
                $results[$row]['module']='国际旅游';
                $results[$row]['short_info']='<p>'.str_limit($short_info,350).'</p>';
                $row++;
            }
            foreach($studys as $study){
                $short_info='';
                $results[$row]['url']='/study/'.$study->id;
                $results[$row]['title']=$study->cn_name;
                $results[$row]['picurl']=$study->picurl;
                $results[$row]['module']='移民留学-大学';
                $short_info='<ul><li>英文名：'.$study->en_name.'</li> <li>地区：';

                if(isset($study->regions))
                    $short_info.=$study->regions->name.'&nbsp;';

                if(isset($study->regions_city))
                    $short_info.=$study->regions_city->name.'&nbsp;';

                if(isset($study->regions_district))
                    $short_info.=$study->regions_district->name.'&nbsp;';

                $short_info.='</li> <li>费用：NZ$'.$study->fee_min.'/年';

                if($study->fee_max>0)
                    $short_info.='- NZ$'.$study->fee_max.'/年';

                $short_info.='</li></ul> ';
                $results[$row]['short_info']=$short_info;
                $row++;
            }
            foreach($StudySPS as $StudySP){
                $short_info='';
                $results[$row]['url']='/study-sp/'.$StudySP->id;
                $results[$row]['title']=$StudySP->name;
                $results[$row]['picurl']=$StudySP->picurl;
                $results[$row]['module']='移民留学-中小学';
                $short_info='<ul><li>学校类型：';
                switch($StudySP->type)
                {

                    case 1 :$short_info.= "小学"; break;
                    case 2 :$short_info.= "初中"; break;
                    case 3 :$short_info.= "高中"; break;
                    case 4 :$short_info.= "全年级"; break;
                    case 5 :$short_info.= "特殊学校"; break;
                }
                $short_info='</li> <li>学校性质：';
                switch($StudySP->nature)
                {

                    case 1 :$short_info.= "公立学校"; break;
                    case 2 :$short_info.= "私立学校"; break;
                    case 3 :$short_info.= "其他"; break;
                }
                $short_info='</li> <li>学校学生：';
                switch($StudySP->gender)
                {

                    case 1 :$short_info.= "男校"; break;
                    case 2 :$short_info.= "女校"; break;
                    case 3 :$short_info.= "男女混合"; break;
                }
                $short_info='</li> <li>所在地区：';
                if(isset($StudySP->regions))
                    $short_info.=$StudySP->regions->name.'&nbsp;';

                if(isset($StudySP->regions_city))
                    $short_info.=$StudySP->regions_city->name.'&nbsp;';

                if(isset($StudySP->regions_district))
                    $short_info.=$StudySP->regions_district->name.'&nbsp;';

                $short_info='</li></ul>';

                $results[$row]['short_info']=$short_info;
                $row++;
            }
            foreach($articles as $article){
                $results[$row]['url']='/news/'.$article->id;
                $results[$row]['title']=$article->title;
                $results[$row]['picurl']=$article->picurl;
                $results[$row]['module']='新闻资讯';
                $results[$row]['short_info']='<p>'.str_limit($article->abstract,350).'</p>';
                $row++;
            }

            foreach($partners as $partner){
                $title="";
                if($partner->iswork==0){
                    $results[$row]['url']='/partner/'.$partner->id;
                    $title="合作伙伴";
                }else{
                    $results[$row]['url']='/trust/'.$partner->id;
                    $title="家庭信托";
                }
                $results[$row]['title']=$partner->title;
                $results[$row]['picurl']=$partner->picurl;
                $results[$row]['module']=$title;
                $results[$row]['short_info']='<p>'.str_limit($partner->abstract,350).'</p>';
                $row++;
            }

            foreach($faqs as $faq){
                $results[$row]['url']='/faq';
                $results[$row]['title']=$faq->title;
                $results[$row]['picurl']='';
                $results[$row]['module']='常见问题';
                $results[$row]['short_info']='';
                $row++;
            }
        }

        $results2=$this->arrayToObject($results);

        $paginator=new LengthAwarePaginator($results2,$row,10,$page,[
            'path'  => request()->url(),
            'query' => request()->query(),
        ]);
        $models=collect($results2)->forpage($page, 10);
        $Lastedarticle=$this->LastedNews(5);
        $hotpropertys=$this->HotProperty(4);
      return view('search.index')->with(compact('search_key','allUrl','models','row','paginator','Lastedarticle','hotpropertys'));
    }

    public  function arrayToObject($e){
        if( gettype($e)!='array' ) return;
        foreach($e as $k=>$v){
            if( gettype($v)=='array' || getType($v)=='object' )
                $e[$k]=(object)$this->arrayToObject($v);
        }
        return (object)$e;
    }

    //最新资讯
    public function LastedNews($n)
    {
        $article= Article::where('publish','1')->where('ishot',1)->orderBy('displayorder', 'asc')->orderBy('created_at', 'desc')->take($n)->select('id', 'title','picurl','abstract')->get();
        return $article;
    }


    //热门房产
    public function HotProperty($n)
    {
        $property= Property::where('publish','1')->where('ishot',1)->where('status', '<>', 10)->where('status', '<>', 14)->orderBy('displayorder', 'asc')->take($n)->select('id', 'title','picurl','address','tagsid')->get();
        return $property;
    }


    public  function  qrcode(){
        $appId  = 'wxbf7a6d0b392ce5db';
        $secret = 'dd1b309aef23dfd916867a21688ba4ea';
        $mchid = '1287337101';
        //商户支付密钥Key。审核通过后，在微信发送的邮件中查看
        $key = 'hpr825QaxxKQ9Ms3IhjQdsw8vnDl1w9s';
        $qrcode = new QRCode($appId, $secret);
        $result = $qrcode->temporary(56, 6 * 24 * 3600);

        $ticket = $result->ticket;// 或者 $result['ticket']
        $expireSeconds = $result->expire_seconds; // 有效秒数
        $url = $result->url; // 二维码图片解析后的地址，开发者可根据该地址自行生成需要的二维码图片
        $allUrl=$qrcode->show($ticket);
        return $allUrl;
    }

}
