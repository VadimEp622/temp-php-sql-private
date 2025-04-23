<template>
  <div id="app">
    <h3>Current Environment: <span>{{ nodeEnv }}</span></h3>
    <input type="text" v-model="message" placeholder="Enter a message">
    <button @click="sendMessage">Send Message</button>
    <section v-if="!isSendingMessage">
      <p>{{ isError ? 'Failure' : 'Success' }}</p>
      <p>Response is:</p>
      <pre>{{ JSON.stringify(response, null, 2) }}</pre>
    </section>
  </div>
</template>

<script>
import axios from 'axios'

export default {
  data() {
    return {
      message: '',
      isSendingMessage: true,
      isError: false,
      response: '',
      nodeEnv: process.env.NODE_ENV
    }
  },
  methods: {
    async sendMessage() {
      this.isError = false
      this.isSendingMessage = true
      try {
        const response = await axios.post('http://vue-php-integration-back.test/api.php', {
          message: this.message
        })
        this.response = response.data
        console.log(response.data)
      } catch (error) {
        this.isError = true
        this.response = error
        console.error(error)
      } finally {
        this.isSendingMessage = false
      }
    }
  }
};
</script>