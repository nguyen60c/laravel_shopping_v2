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

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Log in</p>
                                    @include("layouts.partials.messages")

                                    <form method="post" action="{{route("login.perform")}}" class="mx-1 mx-md-4"
                                          enctype="multipart/form-data">

                                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                                            {{--      field email      --}}
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" name="username" class="form-control"
                                                       value="{{old("username")}}" placeholder="Your email"
                                                       required="required" autofocus>
                                                @if($errors->has("username"))
                                                    <span
                                                        class="text-danger text-left">{{$errors->first("username")}}</span>
                                                @endif
                                            </div>
                                        </div>
                                            {{--      field email      --}}

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
                                        <button type="submit" class="btn btn-primary btn-lg">Login</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
