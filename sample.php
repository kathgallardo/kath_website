<style>
.mydivouter{
  position: relative;
  width: 250px;
  height: 250px;
  margin: 0 auto;
  background-color: pink;
  padding: 20px;
}
.mydivoverlap{
	position: relative;
	z-index: 1;
}
.mybuttonoverlap{
  position: absolute;
  z-index: 1000;
  top: 64px;
  display: none;
  left: 59px;
}
.mydivouter:hover .mybuttonoverlap{ 
	display:block;
}
.img{
	width: 100%;
	height: 100%;
	object-fit: cover;
}
figure{
  width: 250px;
  height: auto;
  margin: 0px !important;
}
</style>
<div class="mydivouter">	
	<figure>
		<img src="https://i.pinimg.com/564x/40/4b/42/404b429762838ee3c8cec4bbcce5f88c.jpg" class="img">
	</figure>
<input type="button" class="mybuttonoverlap btn btn-info" value="Read More"/>
</div>