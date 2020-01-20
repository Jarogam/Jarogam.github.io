
$( ".open-menu" ).click(function() {
  $( this ).toggleClass( "active-menu");
  $(".left-menu").toggleClass("open_left-menu")
});

// console.log(c)
// hidesection.onclick = function() {
//     b.style = `
//     width: 220px;
//     `;
//     hidesection.style = `
//     transform: rotate(360deg);
//     `;
//     c.style = `
//     display: block;
//     `;
//     logo.style = `
//     dispaly: block;
//     `
//   };


// $( "div" ).click(function() {
//     var color = $( this ).css( "background-color" );
//     $( "#result" ).html( "That div is <span style='color:" +
//       color + ";'>" + color + "</span>." );
//   });