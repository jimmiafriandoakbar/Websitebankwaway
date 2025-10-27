@include('admin.partials.head')
<body>

        <!-- Main content -->
        <br>
        <br>
        <br>
        <br>
        <br>
        <section class="content">
            <div class="error-page">
                <h2 class="headline text-warning"> 404</h2>
        
                <div class="error-content">
                    <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops !!!</h3>
        
                    <p>
                        Kami tidak dapat menemukan halaman yang Anda cari,  Anda dapat <a class="text-bold" href="{{route('admin.dashboard')}}">kembali ke dashboard</a>.
                    </p>
        
                    <form class="search-form">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Coming Soon" disabled>
        
                        <div class="input-group-append">
                        <button type="submit" name="submit" disabled    class="btn btn-warning"><i class="fas fa-search"></i>
                        </button>
                        </div>
                    </div>
                    <!-- /.input-group -->
                    </form>
                </div>
                <!-- /.error-content -->
            </div>
            <!-- /.error-page -->
        </section>
        <!-- /.content -->

    @include('admin.partials.script')

</body>
</html>

