import React from 'react'
import Post from '@/Assets/pics/Pic02.jpg'
import Like from '@/Assets/icons/Like'
import Comments from '@/Assets/icons/Comments'

const index = () => {
  return (
    <div className='flex justify-center items-start'>
        <div className='border-2 border-slate-200 rounded-md'>
            <img src={Post} alt="" className='w-[600px]' />
            <h1 className='font-bold justify-end flex my-1'>هذا الاعب مطلب كل برشلوني ..👀🔥👋🏽</h1>
            <div className='flex justify-center items-center my-4 border-t-2 space-x-6'>
                <button className='mt-1 flex justify-start items-start'>
                    <Like />
                    <span>
                        103
                    </span>
                </button>
                <button className='mt-1 flex justify-end items-end'>
                    <Comments />
                    <span>
                        103
                    </span>
                </button>

            </div>
        </div>
        
    </div>
  )
}

export default index