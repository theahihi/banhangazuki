<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quản lý bán hàng</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="<?php echo WEBROOT . 'public/admin/Css/headeradmin.css' ?>">

    <script src="https://cdn.tiny.cloud/1/fu913pcqvkkjh88a0sbfv2ujw5rgt3bh3w46uhb7drzy233p/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '.mytextarea',
        plugins: [
      // Core editing features
      'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
      // Your account includes a free trial of TinyMCE premium features
      // Try the most popular premium features until Dec 16, 2024:
      'checklist', 'mediaembed', 'casechange', 'export', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage', 'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown',
      // Early access to document converters
      'importword', 'exportword', 'exportpdf'
    ],
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),

      });
      
    </script>
    <style>
      
    </style>
  </head>
  
  <body>
    <header class="header" >
      <div class="header-content" >
       
         <div  style="display: flex;">
         <img style=" width: 80px;  height:80px; margin-top:-10px " src="<?php echo WEBROOT . 'public/admin/Picture/quanly.png'; ?>" alt="Admin Image">
            <h1 style="text-align: center; margin-top:15px ">Quản lý Azuki</h1>
         </div>
          
          <div class="greeting">
            
            <?php if($_SESSION['role']==2){?>
            
            <p>Xin chào, <span id="username">Admin : <?php echo $_COOKIE['name'];?></span>!</p>
            <?php }else{ ?>
            <!-- Hiển thị tên người dùng -->
            <p>Xin chào, <span id="username">Thành viên : <?php echo $_COOKIE['name'];?> </span>!</p>
          
            <?php  }?>
            <br>
            <a href="<?php echo WEBROOT . 'taikhoan/dangxuat' ?>" class="logout-link" style="text-decoration: none; text-align: center; display: block; color: while"> ◀ Đăng xuất</a>
            </div>
    
      </div>

    </header>
    