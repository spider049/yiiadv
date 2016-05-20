<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionTest1() {
        $a=3;
        $b=9;
        $sum=$a+$b;
        
        $param = ['sum'=>$sum, 'a'=>$a, 'b'=>$b];
        return $this->render('test1', $param);
    }// จบ test1
    
    
    public function actionTest2($name=NULL,$age=NULL){
        
        echo 'ชื่อของคุณ คือ : ',$name;
        echo '<br>';
        echo 'อายุ = ',$age;
    }
    
    public function actionTest3($address=NULL, $tel=NULL){
        $info = "ที่อยู่ และ เบอร์โทร : $address, $tel";
        
        return $this->render('test2',['info'=>$info]);
    }

}
