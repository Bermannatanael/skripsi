@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="/css/login.css">
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="wrap d-md-flex">
                    <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last ">
                        <div class="text w-100">
                            <h2>Welcome to Register</h2>
                            <p>Already have an account?</p>
                            <a href="login" class="btn btn-white btn-outline-white">Sign In</a>
                        </div>
              </div>
                    <div class="login-wrap p-4 p-lg-5">
                  <div class="d-flex">
                      <div class="w-100">
                          <h3 class="mb-4">Sign Up</h3>
                      </div>
                  </div>
                        <form action="/register" method="POST" class="signin-form">
                            @csrf
                      <div class="form-group mb-3">
                          <label class="label" for="name">Name</label>
                          <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" required>
                      </div>
                      <div class="form-group mb-3">
                          <label class="label" for="username">Username</label>
                          <input type="text" class="form-control  @error('username') is-invalid @enderror" placeholder="Username" required>
                      </div>
                <div class="form-group mb-3">
                    <label class="label" for="Email">Email</label>
                  <input type="email" class="form-control  @error('email') is-invalid @enderror" placeholder="Email" required>
                </div>
                <div class="form-group mb-3">
                    <label class="label" for="number_phone">Number Phone</label>
                  <input type="tel" class="form-control  @error('number_phone') is-invalid @enderror" placeholder="Number Phone" required>
                </div>
                <div class="form-group mb-3">
                    <label class="label" for="password">Password</label>
                  <input type="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Password" required>
                </div>
                <div class="form-group mb-3">
                    <label class="label" for="tempat_lahir">Tempat Lahir</label>
                  <input type="text" class="form-control  @error('tempat_lahir') is-invalid @enderror" placeholder="Tempat Lahir" required>
                </div>

                <div class="form-group mb-3">
                    <label class="label" for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control  @error('tanggal_lahir') is-invalid @enderror" name="tanggal" />
                </div>

                <div class="form-group mb-3">
                    <label class="label" for="jenis_kelamin"> Jenis Kelamin </label>
                        <select class="form-select  @error('jenis_kelamin') is-invalid @enderror">
                            <option placeholder="Pilih">Pilih</option>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                </div>

                <div class="form-group mb-3">
                    <label class="label" for="last_education"> Last Education </label>
                        <select class="form-select  @error('last_education') is-invalid @enderror">
                            <option value="Pilih">Pilih</option>
                            <option value="pK / paud">TK / Paud</option>
                            <option value="SD">SD</option>
                            <option value="sma/smk">SMA/SMK</option>
                            <option value="Kuliah">Kuliah</option>
                        </select>

                <div class="form-group mb-3">
                    <label class="label" for="address">address</label>
                    <input type="text" class="form-control  @error('address') is-invalid @enderror" placeholder="address" required>
                </div>
                <div class="form-group mb-3">
                    <label class="label" for="Product"> Select Class </label>
                        <select class="form-select  @error('Product') is-invalid @enderror">
                            <option value="Pilih">Pilih</option>
                            <option value="piano">Piano</option>
                            <option value="gitar">Gitar</option>
                            <option value="biola">Biola</option>
                            <option value="drum">Drum</option>
                        </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary submit px-3">Sign Up</button>

                </div>
              </form>
            </div>
          </div>
            </div>
        </div>
    </div>
</section>
@endsection

