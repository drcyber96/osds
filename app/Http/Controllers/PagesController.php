<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{


  public function getPosts(){
    return view('posts');
  }
//page
    public function getWelcome(){
      return view('welcome');
    }
    public function getHome(){
      return view('home');
    }
    public function getAdmin(){
      return view('admin');
    }

    public function getCustomsearch(){
      return view('customsearch');
    }

    public function getInfo(){
      return view('info');
    }

    public function getFeedback(){
      return view('feedback');
    }


    public function getManageScammers(){
        return view('manage_scammers');
      }

      public function getScammers(){
          return view('scammers');
        }

    public function getAbout(){
      return view('about');
    }
    public function getContact(){
      return view('contact');
    }

//blog

public function getSindiket1(){
  return view('Menyamar-Sebagai-Kenalan');
}
public function getSindiket2(){
  return view('sindiket-kad-atm');
}
public function getSindiket3(){
  return view('Phone-Scam');
}
public function getSindiket4(){
  return view('Sindiket-Minta-Nombor-TAC-Bank');
}
public function getSindiket5(){
  return view('Sindiket-Pinjaman-Tidak-Wujud');
}
public function getSindiket6(){
  return view('Tipu-SMS');
}
public function getSindiket7(){
  return view('Love-Scam');
}
public function getSindiket8(){
  return view('Wang-Palsu');
}
public function getSindiket9(){
  return view('Keldai-Akaun');
}





}
