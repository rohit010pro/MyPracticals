<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/header.css" rel="stylesheet">  
    <title>Webpage 1</title>
<style>
*{
   box-sizing: border-box; 
   font-family: Arial, Helvetica, sans-serif; 
} 
body{
   padding:90px 10px 50px 10px;
}
.container{
   width:100%;
   padding: 0; 
   margin: 10px auto;
   padding:10px 20px;
   background-color: #eee;
}
div#head{
    width: 100%;
    margin: auto;
    /* position: sticky;
    top: 80px;
    z-index: 99; */
    padding:15px 0;
    color: #fff;
    background-color: crimson;
    text-align: center;
 }
.sub-heading{
    margin: 25px 0 30px 0;
    color: #333;
    font-size: 40px;
}
img{
   width: 100%; 
}
.tag{
   color:red;
}
table.demo-table{
   width: 100%;
   max-width: 600px;
   margin:30px auto 10px auto;
   border: 2px solid #333;
   overflow-x:scroll;
}
table,tr,th,td{
   border: 2px solid #333;
   border-collapse: collapse;
}
th{
   padding: 8px 0;
}
td{
   padding: 5px 7px;
}

img{
   display: block;
   width: 50%;
   height: 50%;
   margin: 20px auto;
}
p{
  margin: 10px 0; 
  line-height: 1.5; 
  letter-spacing: 0.8px; 
  word-spacing: 2px; 
}
ul,ol{
    list-style-position: inside;
}

.list-tag{
   padding:5px 8px;
   list-style: none;
   margin: 15px 0;
   list-style-position: inside;
}
.list-tag li{
   line-height: 25px;
   margin: 10px 0;
}
embed{
   display: block;
   width: 50%;
   height: 50vh;
   margin:2rem auto;
   border: 3px solid #333;
}

@media only screen and (max-width:768px){
    .container{
      padding: 25px;
    }
    embed{
       width: 100%;
    }
}
@media only screen and (min-width:768px){
    .container{
      width: 90%;
    }
    div#head{
       padding: 20px 0;
       width: 90%;
    }
}


</style>
</head>
<body>
  
  <?php include '../header.php';?>

  <div id="head">
    <h1>HTML TAGS</h1>
  </div> 
 
  <div class="container">
    <h2 class="sub-heading">Heading Tags</h2>
    <p>HTML defines Six levels of heading. A heading elements implies all the font
      changes,paragraph break before and after,and any white spaces necessary to
      render the heading.</p>
    <p>The heading elements are <span class="tag">&lt;h1&gt;</span> , <span class="tag">&lt;h2&gt;</span> , <span class="tag">&lt;h3&gt;</span> , <span class="tag">&lt;h4&gt;</span> , <span class="tag">&lt;h5&gt;</span> , <span class="tag">&lt;h6&gt;</span> .In this <span class="tag">&lt;h1&gt;</span> is the 
      biggest Heading,and <span class="tag">&lt;h6&gt;</span> is the smallest heading.</p>
      <h1>Heading 1</h1>
      <h2>Heading 2</h2>
      <h3>Heading 3</h3>
      <h4>Heading 4</h4>
      <h5>Heading 5</h5>
      <h6>Heading 6</h6>
  </div>  

  <div class="container"> 
    <h2 class="sub-heading">Image Tag</h2> 
    <p>The HTML <span class="tag">&lt;img&gt;</span> tag is used to embed an image in a web page.  
       Images are not technically inserted into a web page; images are linked to web pages. 
       The <span class="tag">&lt;img&gt;</span> tag creates a holding space for the referenced image.</p>   
    <p>The <span class="tag">&lt;img&gt;</span> tag is empty, it contains attributes only, and does not have a closing tag.</p>
    <p>The <span class="tag">&lt;img&gt;</span> tag has two required attributes: 
       <li> src - Specifies the path to the image </li> 
       <li> alt - Specifies an alternate text for the image</li> 
    </p>  
    
    <img src="https://images.unsplash.com/photo-1574529395396-21637c4cf5df?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1932&q=80">
    <h3>The src Attribute</h3>
    <p>The required src attribute specifies the path (URL) to the image.</p>
    <blockquote>
      <b>Note:</b> When a web page loads; it is the browser, at that moment, that gets the image
      from a web server and inserts it into the page. Therefore, make sure that the image 
      actually stay in the same spot in relation to the web page, otherwise your visitors 
      will get a broken link icon. The broken link icon is shown if the browser cannot find e image. 
    </blockquote>
  </div>

 <div class="container">
   <h2 class="sub-heading">Font Tag</h2>  
   <p>Fonts play a very important role in making a website more user friendly and increasing content readability.
      Font face and color depends entirely on the computer and browser that is being used to view your page but you
      can use HTML <font> tag to add style, size, and color to the text on your website. You can use a <basefont> tag 
      to set all of your text to the same size, face, and color.</p>
   <p>The <span class="tag">&lt;font&gt;</span> tag is having three attributes called size, color, and face to customize your fonts. To change any of the
      font attributes at any time within your webpage, simply use the <font> tag. The text that follows will remain changed 
      until you close with the </font> tag. You can change one or all of the font attributes within one <font> tag.</p>
    <blockquote>
         Note −The <span class="tag">&lt;font&gt;</span> and <span class="tag">&lt;basefont&gt;</span> tags are deprecated and it is supposed to be removed in a future version of HTML. 
         So they should not be used rather, it's suggested to use CSS styles to manipulate your fonts. But still for 
         learning purpose, this chapter will explain font and basefont tags in detail.
    </blockquote>   
    <h3>Set Font Size</h3>
    <p>You can set content font size using size attribute. The range of accepted values is from 1(smallest) to 7(largest).
      The default size of a font is 3.</p>

      <font size = "1">Font size = "1"</font><br />
      <font size = "2">Font size = "2"</font><br />
      <font size = "3">Font size = "3"</font><br />
      <font size = "4">Font size = "4"</font><br />
      <font size = "5">Font size = "5"</font><br />
      <font size = "6">Font size = "6"</font><br />
      <font size = "7">Font size = "7"</font><br />

      <h3>Set Font Face</h3>
      <p>You can set content font Style using face attribute.</p>
      <font face = "Times New Roman" size = "5">Times New Roman</font><br />
      <font face = "Verdana" size = "5">Verdana</font><br />
      <font face = "Comic sans MS" size =" 5">Comic Sans MS</font><br />
      <font face = "WildWest" size = "5">WildWest</font><br />
      <font face = "Bedrock" size = "5">Bedrock</font><br />

 </div>

 <div class="container">
   <h2 class="sub-heading">Center Tag</h2>
   <p>The <span class="tag">&lt;center&gt;</span> tag in HTML is used to set the align of text into the center. This tag is not supported in HTML5.
      CSS property is used to set the align of the element instead of the center tag in HTML5.</p>
   <p>The HTML <span class="tag">&lt;center&gt;</span> tag is used to center the text horizontally in the HTML document. Since this tag was removed 
       in HTML5, it is recommended that you use the CSS text-align property to format the text horizontally in the
       document. This tag is also commonly referred to as the center element.</p>

    <center>Center Tag</center> 
</div>

<div class="container">
   <h2 class="sub-heading">Marquee Tag</h2>
   <p>The HTML <span class="tag">&lt;marquee&gt;</span> tag is used for scrolling piece of text or image displayed either horizontally across or 
      vertically down your web site page depending on the settings.</p>
   <p>The HTML <span class="tag">&lt;marquee&gt;</span> tag defines a scrolling text area in the HTML document that moves across the page in a 
      horizontal or vertical direction. By default, text found within the <span class="tag">&lt;marquee&gt;</span> tag will scroll from right to left.
      The <span class="tag">&lt;marquee&gt;</span> tag has been deprecated in HTML5 and should no longer be used. It is recommended that you use CSS 
      instead to create a similar scrolling effect. This tag is also commonly referred to as the marquee element.</p>
   <marquee>Marquee Tag</marquee>
</div>

<div class="container">
  <h2 class="sub-heading">Table Tag</h2>  
  <p>The <span class="tag">&lt;table&gt;</span> tag defines an HTML table.</p>
  <p>An HTML table consists of one <span class="tag">&lt;table&gt;</span> element and one or more <span class="tag">&lt;tr&gt;</span> , <span class="tag">&lt;th&gt;</span>, and <span class="tag">&lt;td&gt;</span> elements.</p>
  <p>The <span class="tag">&lt;tr&gt;</span> element defines a table row, the <span class="tag">&lt;th&gt;</span> element defines a table header,
     and the <span class="tag">&lt;td&gt;</span> element defines a table cell.</p>
  <p>An HTML table may also include <span class="tag">&lt;caption&gt;</span> , <span class="tag">&lt;colgroup&gt;</span> , <span class="tag">&lt;thead&gt;</span> , <span class="tag">&lt;tfoot&gt;</span> , <span class="tag">&lt;tbody&gt;</span> elements.</p> 
  <table class="demo-table">
    <thead>
     <tr>
       <th>Enrollment No.</th>
       <th>Name</th>
       <th>Semester</th>
       <th>Department</th>  
     </tr>   
    </thead>
    <tbody>
     <tr>
       <td>186450307033</td>
       <td>Rohit</td>
       <td>5</td>
       <td>Computer</td>
     </tr>  
     <tr>
       <td>186450307041</td>
       <td>Dhruv</td>
       <td>5</td>
       <td>Computer</td>
     </tr>  
     <tr>
       <td>186450307027</td>
       <td>Monu</td>
       <td>5</td>
       <td>Computer</td>
     </tr>  
     <tr>
       <td>186450307094</td>
       <td>Rampal</td>
       <td>5</td>
       <td>Computer</td>
     </tr>  
     <tr>
       <td>186450307005</td>
       <td>Abhishek</td>
       <td>5</td>
       <td>Computer</td>
     </tr>  
    </tbody>  
  </table>

</div>

<div class="container">
 <h2 class="sub-heading">List Tag</h2>  
 <p>HTML offers web authors three ways for specifying lists of information. All lists must contain one or more list
     elements. Lists may contain −</p>
 <ul class="list-tag">  
   <li><span class="tag">&lt;ul&gt;</span> - An unordered list. This will list items using plain bullets.</li>
   <li><span class="tag">&lt;ol&gt;</span> - An ordered list. This will use different schemes of numbers to list your items.</li>
   <li><span class="tag">&lt;dl&gt;</span> - A definition list. This arranges your items in the same way as they are arranged in a dictionary.</li>   
 </ul>
   <h3>HTML Unordered Lists</h3>
   <p>An unordered list is a collection of related items that have no special order or sequence. This list is created 
      by using HTML <span class="tag">&lt;ul&gt;</span> tag. Each item in the list is marked with a bullet.</p>
   <ul>
     <li>List item 1</li>
     <li>List item 2</li>
     <li>List item 3</li>
     <li>List item 4</li>
     <li>List item 5</li>
   </ul>
   <h3>The type Attribute</h3>
   <p>You can use type attribute for <span class="tag">&lt;ul&gt;</span> tag to specify the type of bullet you like. By default, it is a disc.</p>
   <h3>HTML Unordered Lists</h3>
   <p>If you are required to put your items in a numbered list instead of bulleted, then HTML ordered list will be used.
      This list is created by using <span class="tag">&lt;ol&gt;</span> tag. The numbering starts at one and is incremented by one for each successive
      ordered list element tagged with <span class="tag">&lt;li&gt;</span>.</p>
    <ol>
        <li>Beetroot</li>
        <li>Ginger</li>
        <li>Potato</li>
        <li>Radish</li>
    </ol>
</div>

<div class="container">
   <h2 class="sub-heading">Embed Tag</h2>
   <p>The <span class="tag">&lt;embed&gt;</span> tag in HTML is used for embedding external application which is generally multimedia content like audio or video into an HTML document.it is used as a container for embedding plug-ins such as flash animations.This tag is a new tag in HTML and it requires only starting tag.</p>
   <p><b>Attributes:</b> The <span class="tag">&lt;embed&gt;</span> tag contains four attributea which are discussed below:</p>
   <ul class="list-tag">
     <li><b>height:</b> This attribute contains the attribute value in pixels.it is used to specify the height of the embedded content.</li>
     <li><b>src:</b>it is used to hold the URL. it is used to specify the web addreess of embedded content.</li>
     <li><b>width:</b> The width value are set in pixels.it is used to specify the width of embedded content.</li>
     <li><b>type:</b> It content thr media_type content.it is used to specify the media type of the embedded content.</li>
   </ul>
   <embed src="https://player.vimeo.com/external/355619531.sd.mp4?s=3765b209f817149f9f8def6faa0e92a16bc11927&profile_id=139&oauth2_token_id=57447761" type="video/webm" width="100%" height="50vh">
</div>


<script src="../css/script.js"></script>
</body>
</html>