# SE-ProjectEduBridge NOTES

This contains notes about our team contributions.

- Bea: 4 EduBridge modules
- Nicole: created Parent Tips feature 
- Dan: created Parent-Child Account Sync feature

# additional updates
- Bea: added the badge system
- Nicole: added parentTips.js with simple tips for parents  
- Dan: This demonstrates account linking for parent-child monitoring.

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

```javascript
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

function showParentTip() {
  const randomIndex = Math.floor(Math.random() * parentTips.length);
  console.log("Parenting Tip of the Day:", parentTips[randomIndex]);
}

showParentTip();


const parentAccounts = [{ 
  parentId: "p1", name: "Mother", childCode: "abc123", childId: "c1" 
}
];

const childAccounts = [{ 
  childId: "c1", name: "Alex", parentLinked: false 
}
];
    if (parent && child) 
    {
      child.parentLinked = true;
      console.log(`Child ${child.name} is now linked to Parent ${parent.name}`);
    } 
    else 
    {
      console.log("Invalid code or child not found");
    }

