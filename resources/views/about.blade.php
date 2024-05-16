@extends('layouts.master')
@section('title','contact us')
@include('layouts.navigation')
@section('content')
    <div class="bg-light continer flex-col flex align-items-center justify-content-center p-4 h-100">
    <!-- /.row -->
        <img src="img/Hayao_Miyazaki.jpg" class="w-1/5 justify-center align-items-center" alt="">
    <p>
        Studio Ghibli, Inc. (Japanese: 株式会社スタジオジブリ, Hepburn: Kabushiki-gaisha Sutajio Jiburi)[3] is a Japanese animation studio based in Koganei, Tokyo.[4] It has a strong presence in the animation industry and has expanded its portfolio to include various media formats, such as short subjects, television commercials, and two television films. Their work has been well-received by audiences and recognized with numerous awards. Their mascot and most recognizable symbol, the character Totoro from the 1988 film My Neighbor Totoro, is a giant spirit inspired by raccoon dogs (tanuki) and cats (neko).[5] Among the studio's highest-grossing films are Princess Mononoke (1997), Spirited Away (2001), Howl's Moving Castle (2004), Ponyo (2008) and The Boy and the Heron (2023).[6] Studio Ghibli was founded on June 15, 1985, by the directors Hayao Miyazaki and Isao Takahata and producer Toshio Suzuki, after acquiring Topcraft's assets. The studio has also collaborated with video game studios on the visual development of several games.
    </p>
</div>
    @endsection

@section('sidebar')
    @parent

    <!-- Side Widget -->
    <div class="card my-4">
        <h5 class="card-header">About Widget</h5>
        <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
        </div>
    </div>
@endsection
