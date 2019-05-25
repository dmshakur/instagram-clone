@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-s3 p-5">
      <img class="rounded-circle" src="https://instagram.faus1-1.fna.fbcdn.net/vp/a721506f656427052aec885da980c22a/5D655738/t51.2885-19/s150x150/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=instagram.faus1-1.fna.fbcdn.net">
    </div>
    <div class="col-s9">
      <div class="d-flex justify-content-between align-items-baseline">
        <div><h1>{{ $user->username }}</h1></div>
        <a href="">Add new post</a>
      </div>
      <div class="d-flex">
        <div class="pr-5"><strong>153</strong> posts</div>
        <div class="pr-5"><strong>23K</strong> followers</div>
        <div class="pr-5"><strong>212</strong> following</div>
      </div>
      <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
      <div class="pt-4">{{ $user->profile->description }}</div>
      <div><a href="www.freecodecamp.org">{{ $user->profile->url }}</a></div>
    </div>
  </div>
  <div class="row pt-5">
    <div class="col-4">
      <img class="w-100" src="https://instagram.faus1-1.fna.fbcdn.net/vp/8c6e5683cf09ca92164829eda470d20b/5D671E6E/t51.2885-15/e35/c31.0.557.557a/59940621_2476471699031065_8450367174777319180_n.jpg?_nc_ht=instagram.faus1-1.fna.fbcdn.net" alt="">
    </div>
    <div class="col-4">
      <img class="w-100" src="https://instagram.faus1-1.fna.fbcdn.net/vp/277f3b5c126c0f728407f6547919b2f3/5D6240BD/t51.2885-15/sh0.08/e35/c0.104.921.921/s640x640/59781813_2308953272503125_6520484961724886162_n.jpg?_nc_ht=instagram.faus1-1.fna.fbcdn.net" alt="">
    </div>
    <div class="col-4">
      <img class="w-100" src="https://instagram.faus1-1.fna.fbcdn.net/vp/40c185898cb01853d13ee942eeaa76f1/5D7E2766/t51.2885-15/sh0.08/e35/c1.0.747.747/s640x640/60581454_869432733405043_458079974647968282_n.jpg?_nc_ht=instagram.faus1-1.fna.fbcdn.net" alt="">
    </div>
  </div>
</div>
@endsection
