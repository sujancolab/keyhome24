<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

</script>

<template>
     <nav class="nav_sec" id="sticky-wrap">
        <div class="container">
            <div class="nav_inner">
                <div class="logo_area">
                    <div class="logo_box">
                        <Link :href="route('home')">
                            <img src="assets/images/logo.png" alt="Logo" />
                        </Link>
                    </div>
                </div>
                <div class="nav_area">
                    <div class="stellarnav">
                        <ul>
                            <li class="active-"><Link :href="route('rent-buy')">Properties</Link></li>
                            <li><Link :href="route('share-accommodation')">Requests</Link></li>
                            <li><a href="">French</a></li>

                            <li class="header_lgn_btn" v-if="!$page.props.auth"><Link :href="route('login')">
                                    <span class=""><img src="assets/images/user_icon.svg" alt="" /></span>
                                    Login</Link></li>
                            <li class="header_lgn_btn" v-if="$page.props.auth">
                                <Link :href="route('dashboard')">
                                    <span class=""><img src="assets/images/user_icon.svg" alt="" /></span>
                                    Dashboard</Link>
                            </li>
                            <li class="header_lgn_btn" v-if="$page.props.auth" >
                                <Link :href="route('logout')">
                                    <span class=""><img src="assets/images/user_icon.svg" alt="" /></span>
                                    Logout</Link>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>
