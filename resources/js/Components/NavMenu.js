import React, { useState } from "react";

const NavMenu = () => {
  const [product, setProduct] = useState(false);
  const [deliverables, setDeliverables] = useState(false);

  return (
    <>
      <ul className="pr-32 xl:flex hidden items-center h-full">
        <li className="hover:text-indigo-700 cursor-pointer h-full flex items-center text-sm text-indigo-700 tracking-normal">
          Dashboard
        </li>
        <li className="hover:text-indigo-700 cursor-pointer h-full flex items-center text-sm text-gry-800 mx-10 tracking-normal relative">
          {product ? (
            <ul className="bg-white shadow rounded py-1 w-32 left-0 mt-16 -ml-4 absolute  top-0">
              <li className="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-3 hover:bg-indigo-200 px-3 font-normal">
                Landing Pages
              </li>
              <li className="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-3 hover:bg-indigo-200 px-3 font-normal">
                Templates
              </li>
              <li className="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-3 hover:bg-indigo-200 px-3 font-normal">
                Components
              </li>
            </ul>
          ) : (
            ""
          )}
          Products
          <span className="ml-2" onClick={() => setProduct(!product)}>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              className="icon icon-tabler icon-tabler-chevron-down"
              width={16}
              height={16}
              viewBox="0 0 24 24"
              strokeWidth={1}
              stroke="currentColor"
              fill="none"
              strokeLinecap="round"
              strokeLinejoin="round"
            >
              <path stroke="none" d="M0 0h24v24H0z" />
              <polyline points="6 9 12 15 18 9" />
            </svg>
          </span>
        </li>
        <li className="hover:text-indigo-700 cursor-pointer h-full flex items-center text-sm text-gry-800 mr-10 tracking-normal">
          Performance
        </li>
        <li className="hover:text-indigo-700 cursor-pointer h-full flex items-center text-sm text-gray-800 tracking-normal relative">
          {deliverables ? (
            <ul className="bg-white shadow rounded py-1 w-32 left-0 mt-16 -ml-4 absolute  top-0">
              <li className="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-3 hover:bg-indigo-700 px-3 font-normal">
                Landing Pages
              </li>
              <li className="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-3 hover:bg-indigo-700 px-3 font-normal">
                Templates
              </li>
              <li className="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-3 hover:bg-indigo-700 px-3 font-normal">
                Components
              </li>
            </ul>
          ) : (
            ""
          )}
          Deliverables
          <span className="ml-2" onClick={() => setDeliverables(!deliverables)}>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              className="icon icon-tabler icon-tabler-chevron-down"
              width={16}
              height={16}
              viewBox="0 0 24 24"
              strokeWidth={1}
              stroke="currentColor"
              fill="none"
              strokeLinecap="round"
              strokeLinejoin="round"
            >
              <path stroke="none" d="M0 0h24v24H0z" />
              <polyline points="6 9 12 15 18 9" />
            </svg>
          </span>
        </li>
      </ul>
    </>
  );
};

export default NavMenu;
