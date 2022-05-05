<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Error Completing Payment</title>
<style>
.h-100{
    height:100vh;
}
.bg-body{
    display:flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}
.bg-body h2{
    text-align: center;
}
.bg-body div a{
    display: inline-block;
    width:200px;
    background:purple;
    color:#fff;
    height:50px;
    line-height: 45px;
    padding:5px;
    text-align: center;
    border-radius: 5px;
    text-decoration: none;
}
</style>
</head>
<body>
<section class="h-100 bg-body">
<h2>Unable To Process Transaction Some Error Just Occured </h2>
<p>Go back to Payment Page</p>
<div style="margin:0px auto"><a href="<?= base_url();?>dashboard/fund-wallet">Return Back</a></div>
</section>

</body>
</html>