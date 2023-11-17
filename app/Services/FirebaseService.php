<?php

namespace App\Services;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;

class FirebaseService
{
    public static function connect()
    {
        $firebase = (new Factory)
            ->withServiceAccount([
                "type"=> "service_account",
                "project_id"=> "mudarribe-fitness",
                "private_key_id"=> "72eb0e6e2c3f218125ecd2f8a48889bcdf31d7ca",
                "private_key"=> "-----BEGIN PRIVATE KEY-----\nMIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQC/VOPWa9ldMPG1\nmYVUvHLyNRYhfO9BwBe0u9ya2f6Xmn3xOsrSEwv3nFGBrxsJqX1UV915sj/ZFpwl\nId18V0qkwH5QQK6RMcQOHhhuTucjqObnAFcI76b/7KgRzLG3WA04KwSCnncWum91\n3nGuSiM36Fhg2nr6OIF5o8rZenaMF5vV/FqgzGDiKM7hrEvOWO+4+mjUAv+S5VAZ\nA5QQ2ipMs2BLHtfwKvC3dDlLvW0rBDS4rfTyP28waIOY837xcYZzwcxEDhd/lIjJ\nlYov1MmKa2knciJiIzPay6c9DkwRpyLGtrVZ3rPTh00AstCRdBHwufzOlp6+2xRU\ntZtITZu3AgMBAAECggEAKAbr5UtJvX/ESWAVLy1/hKFLgHUBHsm/i91zYOfzJac5\n6tIIZVt7uPD4cj9+Ug6lvBPnrxJ13gYnY3NKwT0HziDBLCvj+Vcmc2ejZ8xU+bZX\nnAMLskBkuQy6+oJOuZMPrOz+9A6Pzm7xa4C+Wp6C8KrIdnaunJNeruJvyQCgNV1M\nO+zU52u88cQvY7BfEaZ4xGA/+GmsaRdtsjLzf0a2+wTitsmpLFNM/c5itBql21YD\nEPnVVMgOVek+rm5VjonowQ91d7hYfIdlxt4IgnMdTWazwcRG+bpZThRL1ylAWi/R\nH6rdYRmDWVsEVHfb1G/jTUL0OtijtznzAvFyMJtkaQKBgQDsh9LLZU8SqyfcskW+\n0YvVzETzXoQMIgHK88jJb+HhKJ4Unczeyi1YWQO2/h8qW6w4x/1IsT9PPzlWdmZk\nlzF604xZBCWVEKFoN0V6Un3klrvysQiOSzvUuaELdSuwZV2pPwuKr1yIgIYFZpeX\n2fSqwiKa/xEllZIjMRIyKH5/7wKBgQDPFKIbo8c9Ns4jGS0e6EoXi/0MqQvOHG4F\ntTbzZ19nxuwx0DX5vwQYrf46Wf22ST7AQYW2bYtSLeTqsCFF/a9tO7tTncGcvCjs\no+e3gCMAKnDAH5tCeY9Em4onWnw68d1Izl6jq2Dz+V00+iQtr4CHOrkmdOZvVUNp\nIFfyLKdYuQKBgQDKsQYZ2KIvTE6nmHmeMPHU7+xyZZ9gyk+g/NImlOMLUQROhH+I\nt9at6/H8Ab7xTIfETNUnUwT+wx4+ks3iC5KSP/D4Y05VdF/s79hxH3nUxrsfGUhM\nr/oArGZubCVZTzQ5EdaxLN9t9j1jKWxk65j4L8755fRqscb+s1F1fDATLwKBgQDG\nSKqErskbezvc7cF/o8s2Ssvt8HwmSqCrBH7uiGAZPadydz0Hu/jPLOOOuhavEelt\nLBA9wxyxftKASlBB9Yyhmp1fjmISkzTYioVY9vAMu5ak0F7ZQw6FEi4ySnlD884A\nZeLG81Xtpyuxi4dS24bFddxNz4fKuSjII7kyYcGHuQKBgDrQlDl9kv1Qm7KZrszC\neFcELI5MOkCvtz0IfuRvoaNCGn90ZOnGvEPB8YmQEd2lFU4y9Hc+z2QyNPNQUGoN\nOc3e/NDI58mk6XYYWaWkpdiEd8zIr5rQyCqimppjhxIDYzpxC0VHn7MqG1yQEUsd\nQV/ZmidCHOgeBdFbNSgl3w5o\n-----END PRIVATE KEY-----\n",
                "client_email"=> "firebase-adminsdk-ehb70@mudarribe-fitness.iam.gserviceaccount.com",
                "client_id"=> "116336733087150749989",
                "auth_uri"=> "https://accounts.google.com/o/oauth2/auth",
                "token_uri"=> "https://oauth2.googleapis.com/token",
                "auth_provider_x509_cert_url"=> "https://www.googleapis.com/oauth2/v1/certs",
                "client_x509_cert_url"=> "https://www.googleapis.com/robot/v1/metadata/x509/firebase-adminsdk-ehb70%40mudarribe-fitness.iam.gserviceaccount.com",
                "universe_domain"=> "googleapis.com"
            ])
                ->withDatabaseUri('https://mudarribe-fitness-default-rtdb.firebaseio.com');

        return $firebase->createDatabase();
    }
}
