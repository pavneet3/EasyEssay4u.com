<?php

switch ($page){
    
    
    case 'user':
         if(isset($_POST['submitted'])==1){
        $first=  mysqli_real_escape_string($dbc,$_POST['first']); //for escaping apostrophe's
        $last=  mysqli_real_escape_string($dbc,$_POST['last']);
        
        if($_POST['password']!='')
        {
            if($_POST['password']==$_POST['passwordv'])
            {
            $password="password=SHA1('$_POST[password]')";
            $verify=true;
            }
            else {
              $verify=false;      
            }
        }
        else {
            $verify=false;
        }
        
        if(isset($_POST['id'])!=''){
            $action='updated';
            $q="UPDATE users SET first='$first', last='$last',email='$_POST[email]',$password,status=$_POST[status] WHERE id=$_GET[id]";
            $r=  mysqli_query($dbc,$q);
        }  
        else {
            $action='added';
             $q="INSERT INTO users(first,last,email,password,status) VALUES ('$first','$last','$_POST[email]',SHA1('$_POST[password]'),'$_POST[status]')";
             if($verify==true)
             {
                 $r=  mysqli_query($dbc,$q);
             }
        }

        if($r){
            $message='<p class="alert alert-success">User was '.$action.'!</p>';
        } 
        else{
            $message = '<p class="alert alert-danger">User could not be '.$action.' because '.mysqli_error($dbc);
            if($verify==false)
            {
                $message.= '<p class="alert alert-danger"> Password fields empty and/or do not match </p>';
            }
            $message.= '<p class="alert alert-warning">Query : '.$q.'</p>';
            }
        }
        if(isset($_GET['id'])&&is_numeric($_GET['id'])){$opened = data_user($dbc,$_GET['id']);}
        else{$opened = null;} 
     break;
    
    case 'topics':
         if(isset($_POST['submitted'])==1){
        $title=  mysqli_real_escape_string($dbc,$_POST['title']); //for escaping apostrophe's
        $category=  mysqli_real_escape_string($dbc,$_POST['category']);
        $name=  mysqli_real_escape_string($dbc,$_POST['name']);
        $blueprint=  mysqli_real_escape_string($dbc,$_POST['blueprint']);
        $body=  mysqli_real_escape_string($dbc,$_POST['body']);

        if(isset($_POST['id'])!=''){
            $action='updated';
            $q="UPDATE topics SET title='$title',category='$category',name='$name',blueprint='$blueprint',body='$body' WHERE id=$_GET[id]";
        }  else {
            $action='added';
             $q="INSERT INTO topics(title,category,name,blueprint,body) VALUES ('$title','$category','$name','$blueprint','$body')";
        }

        $r=  mysqli_query($dbc,$q);
        if($r){
            $message='<p class="alert alert-success">Essay was '.$action.'!</p>';
        } 
        else{
            $message = '<p class="alert alert-danger">Essay could not be '.$action.' because '.mysqli_error($dbc);
            $message.= '<p class="alert alert-warning">Query : '.$q.'</p>';
            }
        }
        if(isset($_GET['id'])&&is_numeric($_GET['id'])){$opened = data_topic($dbc,$_GET['id']);}
        else{$opened = null;} 
     break;
    
    case 'settings':
        if(isset($_POST['submitted'])==1){
        $label=  mysqli_real_escape_string($dbc,$_POST['label']); //for escaping apostrophe's
        $value=  mysqli_real_escape_string($dbc,$_POST['value']);
        
        if(isset($_POST['id'])!=''){
            $action='updated';
            $q="UPDATE settings SET id='$_POST[id]', label='$label',value='$value' WHERE id='$_POST[openedid]'";
            $r=  mysqli_query($dbc,$q);
        }  
        
        if($r){
            $message='<p class="alert alert-success">Setting was '.$action.'!</p>';
        } 
        else{
            $message = '<p class="alert alert-danger">Setting could not be '.$action.' because '.mysqli_error($dbc);
            $message.= '<p class="alert alert-warning">Query : '.$q.'</p>';
            }
        }
        break;
        
        case 'writes':
         if(isset($_POST['submitted'])==1){
        $topic=  mysqli_real_escape_string($dbc,$_POST['topic']); //for escaping apostrophe's
        $email=  mysqli_real_escape_string($dbc,$_POST['email']);
        $name=  mysqli_real_escape_string($dbc,$_POST['name']);
        $blueprint=  mysqli_real_escape_string($dbc,$_POST['blueprint']);
        $body=  mysqli_real_escape_string($dbc,$_POST['body']);

        if(isset($_POST['id'])!=''){
            $action='updated';
            $q="UPDATE writes SET topic='$topic',email='$email',name='$name',blueprint='$blueprint',body='$body' WHERE id=$_GET[id]";
        }  //else {
            //$action='added';
             //$q="INSERT INTO pages(user,slug,title,label,header,body) VALUES ($_POST[user],'$_POST[slug]','$title','$label','$header','$body')";
        //}

        $r=  mysqli_query($dbc,$q);
        if($r){
            $message='<p class="alert alert-success">Essay was '.$action.'!</p>';
        } 
        else{
            $message = '<p class="alert alert-danger">Essay could not be '.$action.' because '.mysqli_error($dbc);
            $message.= '<p class="alert alert-warning">Query : '.$q.'</p>';
            }
        }
        if(isset($_GET['id'])&&is_numeric($_GET['id'])){$opened = data_write($dbc,$_GET['id']);}
        else{$opened = null;} 
     break;
     
     case 'demand':
        if(isset($_GET['id'])&&is_numeric($_GET['id'])){$opened = data_demand($dbc,$_GET['id']);}
        else{$opened = null;} 
     break;

    
    default :
        
    break;
}



?>





