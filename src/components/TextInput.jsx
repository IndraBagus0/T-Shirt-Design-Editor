import React from 'react';

const TextInput = ({ text, handleTextChange, handleAddText }) => {
  return (
    <div className="border border-gray-300 p-4 rounded">
      <h2 className='mb-5'>Input Text Here:</h2>
      <input
        type="textarea"
        id="text-input"
        value={text}
        onChange={handleTextChange}
        placeholder="Enter text"
        className="border border-gray-300 p-2 w-full rounded mb-6"
      />
      <a href="#" onClick={handleAddText} className="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Add Text to Design
      </a>
    </div>
  );
};

export default TextInput;
