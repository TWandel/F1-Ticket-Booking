const currentYear = new Date().getFullYear();

new Calendar('#calendar', {
  dataSource: [
    {
      startDate: new Date(currentYear, 6, 16),
      endDate: new Date(currentYear, 6, 18),
      color: "black"
    },
    {
        startDate: new Date(currentYear, 6, 30),
        endDate: new Date(currentYear, 7, 1),
        color: "black"
      },
      {
        startDate: new Date(currentYear, 7, 27),
        endDate: new Date(currentYear, 7, 29),
        color: "black"
      },
      {
        startDate: new Date(currentYear, 8, 3),
        endDate: new Date(currentYear, 8, 5),
        color: "black"
      },
      {
        startDate: new Date(currentYear, 8, 10),
        endDate: new Date(currentYear, 8, 12),
        color: "black"
      },
      {
        startDate: new Date(currentYear, 8, 24),
        endDate: new Date(currentYear, 8, 26),
        color: "black"
      },
      {
        startDate: new Date(currentYear, 9, 1),
        endDate: new Date(currentYear, 9, 3),
        color: "black"
      },
      {
        startDate: new Date(currentYear, 9, 8),
        endDate: new Date(currentYear, 9, 10),
        color: "black"
      },
      {
        startDate: new Date(currentYear, 9, 22),
        endDate: new Date(currentYear, 9, 24),
        color: "black"
      },
      {
        startDate: new Date(currentYear, 9, 29),
        endDate: new Date(currentYear, 9, 31),
        color: "black"
      },
      {
        startDate: new Date(currentYear, 10, 5),
        endDate: new Date(currentYear, 10, 7),
        color: "black"
      },
      {
        startDate: new Date(currentYear, 10, 19),
        endDate: new Date(currentYear, 10, 21),
        color: "black"
      },
      {
        startDate: new Date(currentYear, 11, 3),
        endDate: new Date(currentYear, 11, 5),
        color: "black"
      },
      {
        startDate: new Date(currentYear, 11, 10),
        endDate: new Date(currentYear, 11, 12),
        color: "black"
      },
  ]
})