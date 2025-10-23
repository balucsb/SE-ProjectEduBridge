// parentTips.js
// Feature: Parenting Tips Script
// Author: Nicole Jane

const parentTips = [
    "Be patient and listen actively to your child.",
    "Spend quality time with your children every day.",
    "Encourage curiosity and creativity.",
    "Set clear boundaries and routines to help children feel secure.",
    "Model kindness and empathy in your actions."
  ];
  
  // Display a random tip
  function showParentTip() {
    const randomIndex = Math.floor(Math.random() * parentTips.length);
    console.log("Parenting Tip of the Day:", parentTips[randomIndex]);
  }
  
  // Run function
  showParentTip();
  