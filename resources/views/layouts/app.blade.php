<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
<?php


  

      $get_sys_data=DB::select('select * from system_settings_general ');

      $metatitle=$get_sys_data[0]->metatitle;
      $metakeywords=$get_sys_data[0]->metakeywords;
      $metadescription=$get_sys_data[0]->metadescription;
      $metafavicon=$get_sys_data[0]->metafavicon;
      $metalogo=$get_sys_data[0]->metalogo;
      $metablacklogo=$get_sys_data[0]->meta_black_logo;
      $metaimage=$get_sys_data[0]->metaimage;
      $copyrighttext=$get_sys_data[0]->copyright_text;
      $sitebrief=$get_sys_data[0]->site_brief;
      $sitemission=$get_sys_data[0]->site_mission;
      $address=$get_sys_data[0]->address;
      $sitephone=$get_sys_data[0]->site_phone;
      $sitename=$get_sys_data[0]->site_name;
      $support_email=$get_sys_data[0]->support_email;
      $cardtttitlea=$get_sys_data[0]->landing_card_title_1;
      $cardtttexta=$get_sys_data[0]->landing_card_text_1;
      $cardttimage=$get_sys_data[0]->landing_card_image_1;

      $cardtttitleb=$get_sys_data[0]->landing_card_title_2;
      $cardtttextb=$get_sys_data[0]->landing_card_text_2;
      $cardttimagb=$get_sys_data[0]->landing_card_image_2;

      $cardtttitlec=$get_sys_data[0]->landing_card_title_3;
      $cardtttextc=$get_sys_data[0]->landing_card_text_3;
      $cardttimagc=$get_sys_data[0]->landing_card_image_3;
  






      ?>
    <title><?php echo$metatitle;?></title>


<title><?php echo$metatitle;?></title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" href="{{ uploads/meta/<?php echo$metafavicon;?>" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="uploads/meta/<?php echo$metafavicon;?>" /> 

 <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image:src" content="uploads/meta/<?php echo$metaimage;?>">
  <meta property="og:image" content="uploads/meta/<?php echo$metaimage;?>">
  <meta name="twitter:title" content="<?php echo$metatitle;?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
   <meta name="keywords" content="<?php echo$metakeywords;?>">
  <meta name="description" content="<?php echo$metadescription;?>">

  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/shortcodes/shortcodes.css') }}">

  


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="{{ asset('js/app.css') }}">



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Styles -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-v4-rtl/4.6.0-2/js/bootstrap.min.js" integrity="sha512-M5KW3ztuIICmVIhjSqXe01oV2bpe248gOxqmlcYrEzAvws7Pw3z6BK0iGbrwvdrUQUhi3eXgtxp5I8PDo9YfjQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-v4-rtl/4.6.0-2/css/bootstrap-grid.min.css" integrity="sha512-NyrvF94auQJYFbBZNKiGXkBCzJoXcpLhVBlMUyUfyDvNwMiB6l5XLBAw+wNFyAg0Jr++YMt7bHAOrRt37/lLDA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-v4-rtl/4.6.0-2/css/bootstrap-reboot.min.css" integrity="sha512-wV3xzHEw4kJUF4G0fyXSefKmUVhwwbOdZinJvOxmysxAXSZBl17porgPOcQBDBQTEwgGevxXGWAAQ/UPaSd0nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-v4-rtl/4.6.0-2/css/bootstrap-rtl.min.css" integrity="sha512-HOXrL8G/VWN9ezwNKEghc4/29guOS3QuWca9+YK8P0J+R6iC9Eeof55AgCRncJLKL+EQKRwJBza2cx0Xp1rdIg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-v4-rtl/4.6.0-2/css/bootstrap.min.css" integrity="sha512-hugT+JEQi0vXZbvspjv4x2M7ONBvsLR9IFTEQAYoUsmk7s1rRc2u7I6b4xa14af/wZ+Nw7Aspf3CtAfUOGyflA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-v4-rtl/4.6.0-2/js/bootstrap.bundle.min.js" integrity="sha512-kBFfSXuTKZcABVouRYGnUo35KKa1FBrYgwG4PAx7Z2Heroknm0ca2Fm2TosdrrI356EDHMW383S3ISrwKcVPUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div id="app">
      


                <br><br>



                               
                                   
                   

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>



<style type="text/css">
  


/* WYSIWYG Editor */
 .editor {
   width: 45rem;
   min-height: 18rem;
   box-shadow: 0 0 4px 1px rgba(0, 0, 0, 0.3);
   border-top: 6px solid #4a4a4a;
   border-radius: 3px;
   
}
 .editor .toolbar {
   box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);
}
 .editor .toolbar .line {
   display: flex;
   border-bottom: 1px solid #e2e2e2;
}
 .editor .toolbar .line:last-child {
   border-bottom: none;
}
 .editor .toolbar .line .box {
   display: flex;
   border-left: 1px solid #e2e2e2;
}
 .editor .toolbar .line .box .btn {
   display: block;
   display: flex;
   align-items: center;
   justify-content: center;
   position: relative;
   transition: 0.2s ease all;
}
 .editor .toolbar .line .box .btn:hover, .editor .toolbar .line .box .btn.active {
   background-color: #e1e1e1;
   cursor: pointer;
}
 .editor .toolbar .line .box .btn.icon img {
   width: 15px;
   padding: 10px;
}
 .editor .toolbar .line .box .btn.icon.smaller img {
   width: 12px;
}
 .editor .toolbar .line .box .btn.has-submenu {
   width: 20px;
   padding: 0 10px;
}
 .editor .toolbar .line .box .btn.has-submenu::after {
   content: '';
   width: 6px;
   height: 6px;
   position: absolute;
   background-image: url(https://image.flaticon.com/icons/svg/25/25243.svg);
   background-repeat: no-repeat;
   background-size: cover;
   background-position: center;
   right: 4px;
}
 .editor .toolbar .line .box .btn.has-submenu .submenu {
   display: none;
   position: absolute;
   top: 36px;
   left: -1px;
   z-index: 10;
   background-color: #fff;
   border: 1px solid #b5b5b5;
   border-top: none;
}
 .editor .toolbar .line .box .btn.has-submenu .submenu .btn {
   width: 39px;
}
 .editor .toolbar .line .box .btn.has-submenu .submenu:hover {
   display: block;
}
 .editor .toolbar .line .box .btn.has-submenu:hover .submenu {
   display: block;
}
 .editor .content-area {
   padding: 15px 12px;
   line-height: 1.5;
}
 .editor .content-area .visuell-view {
   outline: none;
}
 .editor .content-area .visuell-view p {
   margin: 12px 0;
}
 .editor .content-area .html-view {
   outline: none;
   display: none;
   width: 100%;
   height: 200px;
   border: none;
   resize: none;
}

/* Modal */
 .modals {
   z-index: 40;
   display: none;
}
 .modal .modal-wrapper {
   background-color: #fff;
   padding: 1rem;
   position: fixed;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
   width: 20rem;
   min-height: 10rem;
   z-index: 41;
}
 .modal .modal-wrapper .close {
   position: absolute;
   top: 1rem;
   right: 1rem;
   cursor: pointer;
}
 .modal .modal-wrapper .modal-content {
   flex-direction: column;
}
 .modal .modal-wrapper .modal-content h3 {
   margin-top: 0;
}
 .modal .modal-wrapper .modal-content input {
   margin: 1rem 0;
   padding: 0.5rem;
}
 .modal .modal-wrapper .modal-content input[type="text"] {
   width: calc(100% - 1rem);
}
 .modal .modal-wrapper .modal-content .row label {
   margin-left: 0.5rem;
}
 .modal .modal-wrapper .modal-content button {
   background-color: #d2434f;
   border: 0;
   color: #fff;
   padding: 0.5rem 1.2rem;
   cursor: pointer;
}
 .modal .modal-bg {
   position: fixed;
   background-color: rgba(0, 0, 0, .3);
   width: 100vw;
   height: 100vh;
   top: 0;
   left: 0;
}


</style>


<script type="text/javascript">
  
  // define vars
const editor = document.getElementsByClassName('editor')[0];
const toolbar = editor.getElementsByClassName('toolbar')[0];
const buttons = toolbar.querySelectorAll('.btn:not(.has-submenu)');
const contentArea = editor.getElementsByClassName('content-area')[0];
const visuellView = contentArea.getElementsByClassName('visuell-view')[0];
const htmlView = contentArea.getElementsByClassName('html-view')[0];
const modal = document.getElementsByClassName('modal')[0];

// add active tag event
document.addEventListener('selectionchange', selectionChange);

// add toolbar button actions
for(let i = 0; i < buttons.length; i++) {
  let button = buttons[i];
  
  button.addEventListener('click', function(e) {
    let action = this.dataset.action;
    
    switch(action) {
      case 'code':
        execCodeAction(this, editor);
        break;
      case 'createLink':
        execLinkAction();
        break;
      default:
        execDefaultAction(action);
    }
    
  });
}

// this function toggles between visual and html view
function execCodeAction(button, editor) {

  if(button.classList.contains('active')) { // show visuell view
    visuellView.innerHTML = htmlView.value;
    htmlView.style.display = 'none';
    visuellView.style.display = 'block';

    button.classList.remove('active');     
  } else {  // show html view
    htmlView.innerText = visuellView.innerHTML;
    visuellView.style.display = 'none';
    htmlView.style.display = 'block';

    button.classList.add('active'); 
  }
}

// add link action
function execLinkAction() {  
  modal.style.display = 'block';
  let selection = saveSelection();

  let submit = modal.querySelectorAll('button.done')[0];
  let close = modal.querySelectorAll('.close')[0];
  
  // done button active => add link
  submit.addEventListener('click', function() {
    let newTabCheckbox = modal.querySelectorAll('#new-tab')[0];
    let linkInput = modal.querySelectorAll('#linkValue')[0];
    let linkValue = linkInput.value;
    let newTab = newTabCheckbox.checked;    
    
    restoreSelection(selection);
    
    if(window.getSelection().toString()) {
      let a = document.createElement('a');
      a.href = linkValue;
      if(newTab) a.target = '_blank';
      window.getSelection().getRangeAt(0).surroundContents(a);
    }

    modal.style.display = 'none';
    linkInput.value = '';
    
    // deregister modal events
    submit.removeEventListener('click', arguments.callee);
    close.removeEventListener('click', arguments.callee);
  });  
  
  // close modal on X click
  close.addEventListener('click', function() {
    let linkInput = modal.querySelectorAll('#linkValue')[0];
    
    modal.style.display = 'none';
    linkInput.value = '';
    
    // deregister modal events
    submit.removeEventListener('click', arguments.callee);
    close.removeEventListener('click', arguments.callee);
  });
}

// executes normal actions
function execDefaultAction(action) {
  document.execCommand(action, false);
}

// saves the current selection
function saveSelection() {
    if(window.getSelection) {
        sel = window.getSelection();
        if(sel.getRangeAt && sel.rangeCount) {
            let ranges = [];
            for(var i = 0, len = sel.rangeCount; i < len; ++i) {
                ranges.push(sel.getRangeAt(i));
            }
            return ranges;
        }
    } else if (document.selection && document.selection.createRange) {
        return document.selection.createRange();
    }
    return null;
}

// loads a saved selection
function restoreSelection(savedSel) {
    if(savedSel) {
        if(window.getSelection) {
            sel = window.getSelection();
            sel.removeAllRanges();
            for(var i = 0, len = savedSel.length; i < len; ++i) {
                sel.addRange(savedSel[i]);
            }
        } else if(document.selection && savedSel.select) {
            savedSel.select();
        }
    }
}

// sets the current format buttons active/inactive
function selectionChange() {
  
  for(let i = 0; i < buttons.length; i++) {
    let button = buttons[i];
    button.classList.remove('active');
  }
  
  parentTagActive(window.getSelection().anchorNode.parentNode);
}

function parentTagActive(elem) {
  if(elem.classList.contains('visuell-view')) return false;
  
  let toolbarButton;
  
  // active by tag names
  let tagName = elem.tagName.toLowerCase();
  toolbarButton = document.querySelectorAll(`.toolbar .btn[data-tag-name="${tagName}"]`)[0];
  if(toolbarButton) {
    toolbarButton.classList.add('active');
  }
  
  // active by text-align
  let textAlign = elem.style.textAlign;
  toolbarButton = document.querySelectorAll(`.toolbar .btn[data-style="textAlign:${textAlign}"]`)[0];
  if(toolbarButton) {
    toolbarButton.classList.add('active');
  }
  
  return parentTagActive(elem.parentNode);
}


</script>

