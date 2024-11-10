<template>
  <div>Income</div>
  <!--<Link> is inertia, it's like an <a> tag-->
  <Link href="/hello">Show Page</Link>
  <div>
    The message is {{ message }}
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
defineProps({ message: String })
</script>