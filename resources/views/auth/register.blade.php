@extends("layouts.auth-master")

@section("content")
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
                                    <form method="post" action="{{route("register.perform")}}" class="mx-1 mx-md-4"
                                          enctype="multipart/form-data">

                                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                                        {{--      field name      --}}
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" name="name" class="form-control"
                                                       value="{{old("name")}}" placeholder="Your name"
                                                       required="required" autofocus>
                                                @if($errors->has("name"))
                                                    <span
                                                        class="text-danger text-left">{{$errors->first("name")}}</span>
                                                @endif
                                            </div>
                                        </div>
                                        {{--      field name      --}}

                                        {{--      field email      --}}
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="email" name="email" class="form-control"
                                                       value="{{old("email")}}" placeholder="Your email"
                                                       required="required" autofocus>
                                                @if($errors->has("email"))
                                                    <span
                                                        class="text-danger text-left">{{$errors->first("email")}}</span>
                                                @endif
                                            </div>
                                        </div>
                                        {{--      field email      --}}

                                        {{--      field username      --}}
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" name="username" class="form-control"
                                                       value="{{old("username")}}" placeholder="Username"
                                                       required="required" autofocus>
                                                @if($errors->has("username"))
                                                    <span
                                                        class="text-danger text-left">{{$errors->first("username")}}</span>
                                                @endif
                                            </div>
                                        </div>
                                        {{--      field username      --}}

                                        {{--      field password      --}}
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" name="password" class="form-control"
                                                       value="{{old("password")}}" placeholder="password"
                                                       required="required" autofocus>
                                                @if($errors->has("password"))
                                                    <span
                                                        class="text-danger text-left">{{$errors->first("password")}}</span>
                                                @endif
                                            </div>
                                        </div>
                                        {{--      field password      --}}

                                        {{--      field password confirm     --}}
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" name="password_confirmation" class="form-control"
                                                       value="{{old("password_confirmation")}}" placeholder="password confirm"
                                                       required="required" autofocus>
                                                @if($errors->has("password_confirmation"))
                                                    <span
                                                        class="text-danger text-left">{{$errors->first("password_confirmation")}}</span>
                                                @endif
                                            </div>
                                        </div>
                                        {{--      field password confirm     --}}

                                        {{--      field img     --}}
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="file" name="avatar" class="form-control">
                                            </div>
                                        </div>
                                        {{--      field img     --}}

                                        <button type="submit" class="btn btn-primary btn-lg">Register</button>
                                    </form>
                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img
                                        src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                        class="img-fluid" alt="Sample image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
