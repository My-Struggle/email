<?php

require_once "lib/class.phpmailer.php";
//require 'lib/class.smtp.php';
//******************** 配置信息 ********************************
///////**************///////////// */
$mail = new PHPMailer(true); //建立邮件发送类
  $mail->CharSet = "UTF-8";//设置信息的编码类型
  $address = "hjj@isuao.com.cn";//收件人地址
  $mail->SMTPSecure = 'ssl';//加密方式
  $code = rand(10000, 99999);//随机数。验证码
  /*for($i=0;$i<999;$i++)
  {
  $code = rand(10, 999);
  echo $code."\n";
  }*/
  $mail->isSMTP(); // 使用SMTP方式发送
  $mail->Host = "smtp.qq.com"; //使用163邮箱服务器
  $mail->SMTPAuth = true; // 启用SMTP验证功能
  $mail->Username = "572384620@qq.com"; //你的163服务器邮箱账号
  $mail->Password = "znixwckwawhabcic"; // 163邮箱密码
  $mail->Port = 465;//邮箱服务器端口号
  $mail->From = "572384620@qq.com"; //邮件发送者email地址
  $mail->FromName = "测试邮件";//发件人名称
  $mail->AddAddress("$address", '帅哥'); //收件人地址，可以替换成任何想要接收邮件的email信箱,格式是AddAddress("收件人email","收件人姓名")
  //$mail->AddAttachment("email.py"); // 添加附件(注意：路径不能有中文)
  $mail->IsHTML(true);//是否使用HTML格式
  $mail->Subject = "测试测试"; //邮件标题
  $mail->Body = "验证码为<p style='color:red'>$code</p>"; //邮件内容，上面设置HTML，则可以是HTML
  if (!$mail->Send()) {
   echo "邮件发送失败. <p>";
   echo "错误原因: " . $mail->ErrorInfo;
   exit;
  }
  else
  {
    echo "邮件发送成功";
  }

?>