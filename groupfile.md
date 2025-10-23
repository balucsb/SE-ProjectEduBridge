# SE-ProjectEduBridge NOTES

This contains notes about our team contributions.

- Bea: 4 EduBridge modules
- Nicole: created Parent Tips feature 
- Dan: 

# additional updates
- Bea: added the badge system
- Nicole: added parentTips.js with simple tips for parents  
- Dan: 

```javasacript
const modules = {
  numbers: {
    content: "Learn numbers 1 to 10 with fun illustrations",
    quiz: [
      { question: "GUESS WHAT SKIP COUNTING THESE NUMBERS SHOW: 20, 30, 40, 50, 60, 70", options: ["3", "2", "10", "6"], answer: "10" }
    ]
  },
  animalsAndPlants: {
    content: "Learn about animals and plants in your area",
    quiz: [
      { question: "Which animal barks?", options: ["Cat", "Dog", "Bird"], answer: "Dog" },
    ]
  },
  readingAndWriting: {
    content: "Learn basic reading and writing skills",
    quiz: [
      { question: "Which word rhymes with 'Cat'?", options: [Hat", "Dog", "Fish", "Cup"], answer: "Hat" }
    ]
  },
  miniGames: {
    content: "Fun mini-games for learning",
    quiz: []
  }
};

const badges = [
  { title: "I' am Smart'", earned: false },
  { title: "I am Bright", earned: false },
  { title: "Math Whiz Genius", earned: true },
  { title: "Animal Explorer", earned: true }
];

// File: parentTips.js

// Tips for parents to guide their children
const parentTips = [
  "Encourage your child to finish one lesson at a time.",
  "Spend time playing mini-games together.",
  "Remember to take breaks and avoid overloading.",
  "Celebrate small achievements to boost confidence.",
  "Guide your child instead of giving direct answers.",
  "Create a quiet study area free from distractions.",
  "Praise effort, not just results.",
  "Ask your child what they learned after each lesson."
];

// Function to show tips on the webpage
function showTips() {
  const tipsContainer = document.getElementById("parent-tips");
  if (!tipsContainer) return;

  let list = "<ul>";
  parentTips.forEach(tip => {
    list += `<li>${tip}</li>`;
  });
  list += "</ul>";

  tipsContainer.innerHTML = list;
}

// Run the function when the page loads
document.addEventListener("DOMContentLoaded", showTips);

