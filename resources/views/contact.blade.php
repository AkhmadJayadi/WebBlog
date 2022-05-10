@extends('layouts.main')

@section('container')

<section>
    <div class="container">
        <div class="row">
        <div class="col text-center">
          <h4>PT Mateng Sari Makmur Headquarter</h4>
          <div class="row text-center">
            <p> Jl. Sentot Alibasa Jl. Pergudangan, Ketapang, Kec. Telukbetung Selatan<br>
                Kota Bandar Lampung <br>
                Lampung 35227, Indonesia <br><br>
                
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.867243217982!2d105.29544981446234!3d-5.437124696056791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40dba784d3a693%3A0xb6a2c972c1ffcdb3!2sPT.%20Mateng%20Sari%20Makmur!5e0!3m2!1sen!2sid!4v1652169764221!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </p>
          </div>
        </div>

        <div class="col text-center">
                        <h4>Contact Us</h4>
                        <p>Have any question or feedback?</p>
        
                        @if(Session::has('status'))
                        <div class="alert alert-success">{{ Session::get('status') }}</div>
                        @endif
        
                        <form action="" method="post">
        
                            {{ csrf_field() }}
        
                            <label for="name">Name</label>
                            <input class="form-control" type="text" name="name" placeholder="you name" />
                            
                            <label for="email">Email</label>
                            <input class="form-control" type="email" name="email" placeholder="you email address" />
                            
                            <label for="message">Message</label>
                            <textarea class="form-control" name="message" id="" placeholder="your message" cols="30" rows="10"></textarea>
        
                            <br><br>
        
                            <button class="btn btn-success btn-block">Send</button>
                        <form>
                    
                
            
          
        </div>
      </div>
      </div>

</section>









@endsection

