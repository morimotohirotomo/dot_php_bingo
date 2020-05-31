'use strict';

{
  let nums = [];
  for (let i = 0; i < 25; i++) {
  	nums.push(`nums${i}`);
  }

  for (let i = 0; i < 25; i++) {
	  let hit = document.getElementById(nums[i]);

	  hit.addEventListener('click', () => {
	  	hit.classList.add('hit');
	  });
  }
}