<nav class="navbar navbar-expand-md navbar-dark bg-dark">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('/') ? 'active' : ''); ?>" href="/">Home</a>
                </li>
                <li class="nav-item <?php echo e(Request::is('request/create') ? 'active' : ''); ?>">
                    <a class="nav-link " href="request/create">Insert Item</a>
                </li>
            </ul>
    
        </div>
    </nav><?php /**PATH F:\Programmes\laragon\www\requestman\resources\views/inc/navbar.blade.php ENDPATH**/ ?>