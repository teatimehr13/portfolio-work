//jQuery實現不刷新頁面載入內容及更新網址

//    $(document).ready(function() {
//     $('.dd').on('click', function(e) {
//         e.preventDefault(); // 阻止連結跳轉
//         var url = $(this).data('href'); // 儲存點選的地址
//         // alert(url);
//         $('.bodyinner').remove();
//         $('body').load(url).show(); // 載入新內容,url地址與該地址下的選擇器之間要有空格,表示該url下的#container
//         // alert(now);

//         let headerObj = {
//                 foo: "bar"
//             };
//             history.pushState(headerObj, "page 2", url);
//     });
//     })


// html
// <!-- <div class='dd' data-href="./back/title.php">HEADER</div>
// <div class='dd' data-href="./back/me.php">ME</div>
// <div class='dd' data-href="./back/collection.php">COLLECTION</div>
// <div class='dd' data-href="./back/skills.php">SKILLS</div>
// <div class='dd' data-href="./back/bottom.php">FOOTER</div>
// <div class='dd' data-href="./back/admin.php">USERS</div> -->