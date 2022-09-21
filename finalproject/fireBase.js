var fireBase = fireBase || firebase;
var hasInit = false;
var config = {
    apiKey: "AIzaSyDpEMhsum8BkU64Kr_Y0Vok00iispRjw5M",
    authDomain: "webdesignproject-e7bd0.firebaseapp.com",
    projectId: "webdesignproject-e7bd0",
    storageBucket: "webdesignproject-e7bd0.appspot.com",
    messagingSenderId: "148771826615",
    appId: "1:148771826615:web:e1c6325b52e3ae87739632",
    measurementId: "G-ZJ6M4RJLX7"
  };
if(!hasInit){
    firebase.initializeApp(config);
    hasInit = true;
}
