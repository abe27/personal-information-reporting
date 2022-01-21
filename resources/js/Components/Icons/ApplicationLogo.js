import React from 'react'

const ApplicationLogo = ({
  className,
  width = 48,
  height = 48,
}) => {
  return (
    <svg
      className={className}
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 40 40"
      width={width}
      height={height}
    >
      <path
        fill="#8bb7f0"
        d="M20,38.5C9.799,38.5,1.5,30.201,1.5,20S9.799,1.5,20,1.5S38.5,9.799,38.5,20S30.201,38.5,20,38.5z"
      />
      <path
        fill="#4e7ab5"
        d="M20,2c9.925,0,18,8.075,18,18s-8.075,18-18,18S2,29.925,2,20S10.075,2,20,2 M20,1 C9.507,1,1,9.507,1,20s8.507,19,19,19s19-8.507,19-19S30.493,1,20,1L20,1z"
      />
      <path
        fill="#fff"
        d="M20,35.5c-8.547,0-15.5-6.953-15.5-15.5S11.453,4.5,20,4.5S35.5,11.453,35.5,20S28.547,35.5,20,35.5 z"
      />
      <path
        fill="#4e7ab5"
        d="M20,5c8.271,0,15,6.729,15,15s-6.729,15-15,15S5,28.271,5,20S11.729,5,20,5 M20,4 C11.163,4,4,11.163,4,20s7.163,16,16,16s16-7.163,16-16S28.837,4,20,4L20,4z"
      />
      <path
        fill="none"
        stroke="#66798f"
        strokeLinecap="round"
        strokeMiterlimit="10"
        strokeWidth="2"
        d="M26.995 9.665L20 20 25.846 25.846"
      />
      <path
        fill="#66798f"
        d="M20 18.5A1.5 1.5 0 1 0 20 21.5A1.5 1.5 0 1 0 20 18.5Z"
      />
      <path
        fill="#c5d4de"
        d="M20 6A1 1 0 1 0 20 8 1 1 0 1 0 20 6zM20 32A1 1 0 1 0 20 34 1 1 0 1 0 20 32z"
      />
      <g>
        <path fill="#c5d4de" d="M33 19A1 1 0 1 0 33 21A1 1 0 1 0 33 19Z" />
      </g>
      <g>
        <path fill="#c5d4de" d="M7 19A1 1 0 1 0 7 21A1 1 0 1 0 7 19Z" />
      </g>
    </svg>
  )
}

export default ApplicationLogo;