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
.heart {
  width: 100px;
  height: 100px;
  background: url("https://cssanimation.rocks/images/posts/steps/heart.png") no-repeat;
  background-position: 0 0;
  cursor: pointer;
  transition: background-position 1s steps(28);
  transition-duration: 0s;

  &.is-active {
    transition-duration: 1s;
    background-position: -2800px 0;
  }
}

// BASIC

.stage {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>

<!-- <div class="mydivouter">	
	<figure>
		<img src="https://i.pinimg.com/564x/40/4b/42/404b429762838ee3c8cec4bbcce5f88c.jpg" class="img">
	</figure>
<input type="button" class="mybuttonoverlap btn btn-info" value="Read More"/>
</div> -->

<input id="toggle-heart" type="checkbox"/>
<label for="toggle-heart">❤</label>



<script>
  body {
    display: flex;
    justify-content: center;
    margin: 0;
    height: 100vh;
}

[id='toggle-heart'] {
  position: absolute;
  left: -100vw;
    
    &:checked + label {
        color: #e2264d;
    }
}

[for='toggle-heart'] {
    align-self: center;
    color: #aab8c2;
    font-size: 2em;
    cursor: pointer;
}
</script>