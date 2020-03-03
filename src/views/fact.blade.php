<style>
    h1{
        text-align:center;
        font-family: fantasy;
        margin-top:10%;
        background: -webkit-linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    p{

    }

    .factBox{
        background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%);
        width:75%;
        margin-left:auto;
        margin-right:auto;
        border:double 15px black;

    }

    .factText{
        text-align:center;
        font-size:1.5em;
        padding-top:5%;
        padding-bottom:5%;
        padding-left:1%;
        padding-right:1%;
        font-family: fantasy;
    }

    .factLike{
        text-align:center;
    }

    .factForm{
        width:20%;
        margin-left:auto;
        margin-right:auto;
    }

    .factButton{
        background:none;
        border:none;
        text-align:center;
        width:100%;
    }

    .factButton:hover{
        color:white;
    }

    .NewfactButton{
        background:linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%);
        border:solid 3px black;
        text-align:center;
        padding:1%;
        width:100%;
        margin-left:auto;
        margin-right:auto;
        font-weight:bold;
        font-size:0.8em;
    }

    .newFactForm{
        width:20%;
        margin-left:auto;
        margin-right:auto;
        margin-top:5%;
    }
</style>


<h1> Your random fact</h1>



@foreach($facts as $fact)
    <div class="factBox">
        <p class="factText"> {{$fact->fact}} </p>
        <p class="factLike"> {{$fact->likes}} people liked this fact!</p>
        <form class = "factForm" action = "/fact" method = "post">
            <input type="hidden" name="factId" value="{{$fact->id}}">
            <button class="factButton" type = 'submit'> Do you like this fact? </button>
        </form>
    </div>
    @endforeach


<form class="newFactForm"  action = "/fact" method = "get">
    <button class="NewfactButton" type = 'submit'> Would you like to see a new fact? </button>
</form>
