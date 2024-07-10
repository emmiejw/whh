<template>
    <div class="facebook-feed-container">
        <div id="fb-root"></div>
        <div v-if="fbScriptLoaded" class="fb-page"
             :data-href="pageUrl"
             :data-width="feedWidth"
             :data-height="feedHeight"
             data-tabs="timeline"
             data-small-header="false"
             data-adapt-container-width="true"
             data-hide-cover="false"
             data-show-facepile="true">
        </div>
    </div>
</template>

<script>
export default {
    name: 'FacebookFeed',
    props: {
        pageUrl: {
            type: String,
            required: true,
        },
    },
    data() {
        return {
            feedWidth: '500',
            feedHeight: '600',
            fbScriptLoaded: false,
        };
    },
    mounted() {
        this.loadFacebookSDK().then(() => {
            this.updateFeedDimensions();
            window.addEventListener('resize', this.updateFeedDimensions);
        });
    },
    beforeDestroy() {
        window.removeEventListener('resize', this.updateFeedDimensions);
    },
    methods: {
        loadFacebookSDK() {
            return new Promise((resolve, reject) => {
                if (document.getElementById('facebook-jssdk')) {
                    this.fbScriptLoaded = true;
                    resolve();
                    return;
                }

                window.fbAsyncInit = () => {
                    this.fbScriptLoaded = true;
                    resolve();
                };

                const js = document.createElement('script');
                js.id = 'facebook-jssdk';
                js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0';
                js.onload = () => {
                    if (window.FB) {
                        this.fbScriptLoaded = true;
                        window.FB.init({
                            xfbml: true,
                            version: 'v9.0',
                        });
                        resolve();
                    }
                };
                js.onerror = () => reject(new Error('Failed to load Facebook SDK'));

                const fjs = document.getElementsByTagName('script')[0];
                fjs.parentNode.insertBefore(js, fjs);
            });
        },
        updateFeedDimensions() {
            const width = window.innerWidth;
            if (width < 600) {
                this.feedWidth = '350';
                this.feedHeight = '500';
            } else if (width < 900) {
                this.feedWidth = '600';
                this.feedHeight = '900';
            } else {
                this.feedWidth = '1000';
                this.feedHeight = '700';
            }
            this.refreshFacebookFeed();
        },
        refreshFacebookFeed() {
            this.$nextTick(() => {
                if (window.FB) {
                    window.FB.XFBML.parse();
                }
            });
        },
    },
};
</script>

<style scoped>
.facebook-feed-container {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100vh;
}
.fb-page {
    margin: 0 auto;
}

@media (min-width: 300px) and (max-width: 900px) {
    .facebook-feed-container {
        margin-top: -8rem;
    }
}

@media (min-width: 900px)  {
    .facebook-feed-container {
        margin-top: -3rem;
    }
}

</style>
