<?php

namespace Drupal\Tests\blog\Functional;

use Drupal\Tests\block\Functional\AssertBlockAppearsTrait;

/**
 * Test blog functionality.
 *
 * @group blog
 */
class BasicBlogTest extends BlogTestBase {
  use AssertBlockAppearsTrait;

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'block',
    'blog',
  ];

  /**
   * @var \Drupal\user\UserInterface
   */
  protected $regularUser;

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();
    // Create regular user.
    $this->regularUser = $this->drupalCreateUser(['create article content']);
  }

  /**
   * Test personal blog title.
   */
  public function testPersonalBlogTitle() : void {
    $this->drupalLogin($this->regularUser);
    $this->drupalGet('blog/' . $this->blogger1->id());
    $this->assertSession()->statusCodeEquals(200);
    $this->assertSession()->titleEquals($this->blogger1->getDisplayName() . "'s blog | Drupal");
  }

  /**
   * View the blog of a user with no blog entries as another user.
   */
  public function testBlogPageNoEntries() : void {
    $this->drupalLogin($this->regularUser);
    $this->drupalGet('blog/' . $this->bloggerNoEntries->id());
    $this->assertSession()->statusCodeEquals(200);
    $this->assertSession()->titleEquals($this->bloggerNoEntries->getDisplayName() . "'s blog | Drupal");
    $this->assertSession()->pageTextContains($this->bloggerNoEntries->getDisplayName() . ' has not created any blog entries.');
  }

  /**
   * View blog block.
   */
  public function testBlogBlock() : void {
    // Place the recent blog posts block.
    $blog_block = $this->drupalPlaceBlock('views_block:blog-blog_block');
    // Verify the blog block was displayed.
    $this->drupalGet('<front>');
    $this->assertBlockAppears($blog_block);
  }

}
