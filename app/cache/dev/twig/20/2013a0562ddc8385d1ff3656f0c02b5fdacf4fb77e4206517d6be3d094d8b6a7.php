<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_3f45dfbaed61ca15abccd0489802b5db69f73a12add25d5d04c2aabd81ca367f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68878ec07b8d0f99bc0a089d46f9bf74fa5b8206ffc41a67784ed7dbad687ba0 = $this->env->getExtension("native_profiler");
        $__internal_68878ec07b8d0f99bc0a089d46f9bf74fa5b8206ffc41a67784ed7dbad687ba0->enter($__internal_68878ec07b8d0f99bc0a089d46f9bf74fa5b8206ffc41a67784ed7dbad687ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68878ec07b8d0f99bc0a089d46f9bf74fa5b8206ffc41a67784ed7dbad687ba0->leave($__internal_68878ec07b8d0f99bc0a089d46f9bf74fa5b8206ffc41a67784ed7dbad687ba0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2385e9c48c79de6fed9086013445b2a8832025e86cd3da8a4f8cdab2f8ee1602 = $this->env->getExtension("native_profiler");
        $__internal_2385e9c48c79de6fed9086013445b2a8832025e86cd3da8a4f8cdab2f8ee1602->enter($__internal_2385e9c48c79de6fed9086013445b2a8832025e86cd3da8a4f8cdab2f8ee1602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_2385e9c48c79de6fed9086013445b2a8832025e86cd3da8a4f8cdab2f8ee1602->leave($__internal_2385e9c48c79de6fed9086013445b2a8832025e86cd3da8a4f8cdab2f8ee1602_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "@FOSUser/ChangePassword/change_password_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
