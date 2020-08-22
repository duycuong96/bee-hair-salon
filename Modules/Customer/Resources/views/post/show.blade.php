@extends('customer::layouts.master')
@section('title','BeeHair')
@section('content')


<!-- banner -->
<section class="inner-page-banner" id="home">
</section>
<!-- //banner -->
<!-- page details -->
<div class="breadcrumb-agile">
	<ol class="breadcrumb mb-0">
		<li class="breadcrumb-item">
			<a href="index.html">Trang chủ</a>
		</li>
		<li class="breadcrumb-item active" aria-current="page">Blog Single</li>
	</ol>
</div>


<div class="w3l-blog-single">
	<div class="single blog py-5">
	  <div class="container py-md-3">

		<div class="main-cont-blog">
		  <!-- left side blog post content -->
		  <div class="single-left">
			<div class="single-left1">
			  <img src="{{asset('client/images/blog4.jpg')}}" alt=" " class="img-responsive img-fluid">
			  <div class="btom-cont">
				<h5 class="card-title">Sed ut perspiciatis unde omnis iste natus error</h5>
				<ul class="admin-post">
				  <li>
					<a href="blog-single.html"><span class="fa fa-user"></span> Alexander</a>
				  </li>
				  <li>
					<a href="blog-single.html"><span class="fa fa-clock-o"></span>13 June 2019</a>
				  </li>
				  <li>
					<a href="blog-single.html"><span class="fa fa-comments-o"></span>Comments 20</a>
				  </li>
				</ul>
				<p class="">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium tatum
				  deleniti atque corrupti quos dolores et quas molestias excepturi sint,
				  similique sunt in culpa qui officia deserunt mollitia animi.</p>
				<p class="para-top-space">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error porro ipsam non
				  rerum, itaque nihil aliquid libero inventore. Eius architecto placeat quis nam similique, nobis quod,
				  animi amet. Minima, laboriosam! possimus minus nisi iure pariatur exercitationem blanditiis nesciunt
				  sequi! Nisi, neque, laborum voluptatem exercitationem minus facere reiciendis quis exercita tionem minus
				  facere reiciendis quis.</p>
			  </div>
			</div>

		  </div>
		  <!-- left side blog post content -->
		</div>
	  </div>
	</div>
  </div>


  <div class="comments">
	<h3 class="aside-title ">Recent Comments</h3>
	<div class="comments-grids">
		<div class="media">
			<img class="img-responsive" src="{{asset('client/images/blog5.jpg')}}" alt="placeholder image">

			<div class="media-body comments-grid-right">
				<h4><a href="#">Andriana Lima</a></h4>
				<ul class="">
					<li class="font-weight-bold">15 Oct  2019

					</li>

				</ul>
				<p>Nullam facilisis diam non magna porta luctus. Aenean facilisis erat posuere erat ornare ultrices. Aliquam ac arcu interdum,Aliquam ac arcu interdum, dapibus nibh convallis, semper augue.</p>
				<a href="#comment" class="replay"><span class="fa fa-reply"></span> Reply</a>
			</div>
		</div>
		<div class="media second-part">
			<img class="img-responsive" src="{{asset('client/images/blog5.jpg')}}" alt="placeholder image">
			<div class="media-body comments-grid-right">
				<h4><a href="#">Shane Watson</a></h4>
				<ul class="">
					<li class="font-weight-bold">20 Oct 2019

					</li>

				</ul>
				<p>Nullam facilisis diam non magna porta luctus. Aenean facilisis erat posuere erat ornare ultrices. Aliquam ac arcu interdum,Aliquam ac arcu interdum, dapibus nibh convallis, semper augue.</p>
				<a href="#comment" class="replay"><span class="fa fa-reply"></span> Reply</a>
			</div>
		</div>
		<div class="media third-part">
				<img class="img-responsive" src="{{asset('client/images/blog5.jpg')}}" alt="placeholder image">
				<div class="media-body comments-grid-right">
					<h4><a href="#">Heidi Kum</a></h4>
					<ul class="">
						<li class="font-weight-bold">25 Oct 2019

						</li>

					</ul>
					<p>Nullam facilisis diam non magna porta luctus. Aenean facilisis erat posuere erat ornare ultrices. Aliquam ac arcu interdum,Aliquam ac arcu interdum, dapibus nibh convallis, semper augue.</p>
					<a href="#comment" class="replay"><span class="fa fa-reply"></span> Reply</a>
				</div>
			</div>
	</div>
</div>

<div class="w3l-comments-form-9 pt-3">
	<div class="coments-forms-sub">
		<div class="wrapper">
			<div class="testi-top">
				<h3 class="title-main2">Leave A Message</h3>
				<div class="form-commets">
					<form action="#" method="post">

						<textarea name="Message" required="" placeholder="Write your comments here"></textarea>
						<div class="media">
								<input type="text" name="Name" required="Name" placeholder="Your Name">
								<input type="email" name="Email" required="Email" placeholder="Your Email">
							</div>
							<div class="text-right">
						<button class="btn button-eff" type="submit">Post comment</button>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection
