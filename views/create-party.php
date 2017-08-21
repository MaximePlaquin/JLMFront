<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Création de soirée</title>
  
  
<link rel='stylesheet prefetch' href='https://unpkg.com/vuetify/dist/vuetify.min.css'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons'>
<link rel='stylesheet' href='../css/styleForm.css'>

  
  
</head>

<body>
<div id="create-party">
<form action="">
<template>
<v-card class="secondary elevation-0">
<v-card-text>
  <v-container fluid>
    <v-layout row>
      <v-flex xs4>
        <v-subheader class="grey--text text--lighten-1">name</v-subheader>
      </v-flex>
      <v-flex xs8>
        <v-text-field
          name="input-3"
          label="Label Text"
          value="Input text"
          dark
        ></v-text-field>
      </v-flex>
    </v-layout>
    <v-layout row>
      <v-flex xs4>
      <v-subheader class="grey--text text--lighten-1">Créator</v-subheader>
      </v-flex>
      <v-flex xs8>
        <v-text-field
          name="input-3"
          label="Label Text"
          value="Input text"
          dark
        ></v-text-field>
      </v-flex>
    </v-layout>
    <v-layout row>
      <v-flex xs4>
      <v-subheader class="grey--text text--lighten-1">Description</v-subheader>
      </v-flex>
      <v-flex xs8>
        <v-text-field
          name="input-3"
          label="Label Text"
          value="Input text"
          dark
        ></v-text-field>
      </v-flex>
    </v-layout>
    <v-layout row>
      <v-flex xs4>
      <v-subheader class="grey--text text--lighten-1">Max invit</v-subheader>
      </v-flex>
      <v-flex xs8>
        <v-text-field
          name="input-3"
          label="Label Text"
          value="Input text"
          dark
        ></v-text-field>
      </v-flex>
    </v-layout>
    <div>
      <v-btn primary dark>Créer ta soirée !</v-btn>
    </div>
  </v-container>
</v-card-text>
</v-card>
</template>
</form>
</div>

  <!-- End Content -->
</div>
  <script src='https://unpkg.com/vue@2.4.1/dist/vue.js'></script>
<script src='https://unpkg.com/vuetify/dist/vuetify.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/vue-resource@1.3.4"></script>
    <script src="../js/index.js"></script>

</body>
</html>
