<?php
namespace Modules\Gogi;

//클래스 선언
class Hello{
    const MYNAME = "Gogi";
    //클래스의 함수 == 메소드라고 함
    public function greeting()
    {
        echo self::MYNAME . " hello world";
    }

    //생성자
    public function __construct()
    {
        echo __CLASS__ . "객체를 생성합니다<br>";

        $DB_INFO ="mysql:";
        $DB_INFO .= "dbname=db2020;";
        $DB_INFO .= "charser-utf8;";
        $DB_INFO .= "host=localhost";

        $BD_USER = "db2020";
        $DB_PASSWORD = "123456";

        // 데이터베이스 설정값
        $dbinfo = include("../dbinfo.php");
        print_r($dbinfo);
        $db = new \Jiny\Mysql\Connection($dbinfo); //라이브러리 -> 컴포저로 깔음

        // 접속정보 설정
        //$db->setUser("db2020")->setPassword("123456");
        //$db->setSchema("db2020")->setCharset();
        //$db->setHost()->connect(); //PDO 객체를 생성
        $db->connect(); //PDO 객체를 생성
        
        /*
        if (extension_loaded("PDO") && extension_loaded("pdo_mysql")) {
            // 접속코드
            //PDO 객체를 생성 인스턴스를 $conn 저장
            $conn = new \PDO($DB_INFO, $BD_USER, $DB_PASSWORD);
            if($conn){
                echo "DB접속 성공";
            }else{
                echo "DB접속 실패....";
            }    

        } else {
            echo "PDO 드라이버가 활성화 되어 있지 않습니다.\n";
            exit(1); // 오류 종료
        }
        */
    }
}
