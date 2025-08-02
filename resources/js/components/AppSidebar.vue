<script setup lang="ts">
import NavUser from '@/components/NavUser.vue';
import { Sidebar, SidebarContent, SidebarFooter } from '@/components/ui/sidebar';
import CustomSidebarContent from '@/components/CustomSidebarContent.vue';
</script>

<template>
    <Sidebar collapsible="icon" variant="inset">
        <SidebarContent>
            <CustomSidebarContent />
        </SidebarContent>
        <SidebarFooter>
            <NavUser />
        </SidebarFooter>
    </Sidebar>
    <slot />
</template>
