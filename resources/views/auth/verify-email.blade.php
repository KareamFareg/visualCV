<title>Reset Password</title>

<x-base-layout>
    <main id="main" class="main-site left-sidebar">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="/" class="link">Home</a></li>
                    <li class="item-link"><span>Reset Password</span></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                    <div class=" main-content-area">
                        <div class="wrap-login-item ">
                            <div class="login-form form-item form-stl">
                                <x-jet-validation-errors class="mb-4" />
                                <p style="color: green">
                                    Verify your Email address by clicking on the link we just Emailed to you !!
                                </p>
                                <span style="font-size: 16px;font-weight: bold;color: blue">
                                       If you didn't Receive the email, we will gladly send you another :)
                                       </span>
                                <div style="padding-top: 20px">
                                    <div class="col-lg-6">
                                        <form method="POST" action="{{ route('verification.send') }}">
                                            @csrf
                                            <div>
                                                <x-jet-button type="submit" class="btn btn-success" >
                                                    Resend Verification Email
                                                </x-jet-button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-6">
                                        <form method="POST" action="{{ route('logout') }}" >
                                            @csrf
                                            <button type="submit" class="btn btn-danger" class="underline text-sm text-gray-600 hover:text-gray-900">
                                                Log Out
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end main products area-->
                </div>
            </div><!--end row-->

        </div><!--end container-->

    </main>
</x-base-layout>