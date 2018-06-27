// init
// class='cropper-example-1のimgタグに適用'
var $image = $('.cropper-example-1 > img'),replaced;

//crop options
// id='imgに適用'
$('#img').cropper({
  aspectRatio: 4 / 4 // ここでアスペクト比の調整 ワイド画面にしたい場合は 16 / 9

  });

// getDataボタンが押された時の処理
$('#getData').on('click', function(){

   // crop のデータを取得
   var data = $('#img').cropper('getData');

   // 切り抜きした画像のデータ
   // このデータを元にして画像の切り抜きが行われます
   var image = {
     width: Math.round(data.width),
     height: Math.round(data.height),
     x: Math.round(data.x),
     y: Math.round(data.y),
     _token: 'jf89ajtr234534829057835wjLA-SF_d8Z' // csrf用
    };

   // post 処理
   $.post('/cropper', image, function(res){
     // 成功すれば trueと表示されます
     console.log(res);
   });

});


