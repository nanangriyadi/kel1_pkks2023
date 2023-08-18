@extends('layouts.main')

@section('container')

<!-- contact -->
<section class="contact-us" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 align-self-center">
                <div class="row">
                    <div class="col-lg-12">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2>Let's get in touch</h2>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <input name="name" type="text" id="name" placeholder="YOURNAME...*" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                            placeholder="YOUR EMAIL..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <input name="subject" type="text" id="subject" placeholder="SUBJECT...*"
                                            required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" type="text" class="form-control" id="message"
                                            placeholder="YOUR MESSAGE..." required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="button">SEND MESSAGE
                                            NOW</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.224790573552!2d111.3550145758563!3d-7.8715311782709465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e799dca43b011bd%3A0xa7f7358a14015352!2sSLB%20Negeri%20Badegan!5e0!3m2!1sid!2sid!4v1691033879069!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
     <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="right-info">
                    <ul>
                        <li>
                            <p>Phone Number<br>
                            <span> 010-020-0340</span></p>
                        </li>
                        <li>
                            <p>Email Address<br>
                            <span> info@slbnbadeganponorogo.sch.id</span></p>
                        </li>
                        <li>
                            <p>Street Address<br>
                            <span>Rio de Janeiro - RJ, 22795-008, Brazil</span></p>
                        </li>
                        <li>
                            <p>Website URL<br>
                            <span> slbnbadeganponorogo.sch.id</span></p>
                        </li>
                    </ul>
                </div>
        </div>
    </div>
</section>

@endsection