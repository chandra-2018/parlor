 <!-- Menu -->
 <nav id="betty-main-menu">
    <ul>
        <li class="active"><a href='index.html'>Home</a></li>
        <li><a href='about.html'>About</a></li>
        <li><a href='services.html'>Services</a></li>
        <li><a href='blog.html'>Blog</a></li>
        <li><a href='contact.html'>Contact</a></li>
        
        <?php
            $userDetails = $this->session->userdata("userDetails");    
            if(isset($userDetails)){
                ?>
                <li><a href='#'><?php echo $userDetails[0]['full_name']?></a></li>
                <li><a href='<?php echo $this->config->base_url() ?>auth/logout'>Logout</a></li>
                <?php
            } else{
                ?>
                    <li><a href='<?php echo $this->config->base_url() ?>auth/login'>Login/Sign-up</a></li>
                <?php
            }
        ?>


    </ul>
</nav>