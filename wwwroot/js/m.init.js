document.addEventListener("DOMContentLoaded", () => {
  const fab = document.querySelectorAll(".fixed-action-btn");
  const tooltip = document.querySelectorAll(".tooltipped");

  const fabInit = M.FloatingActionButton.init(fab, {});
  const tooltipInit = M.Tooltip.init(tooltip, {});
});
