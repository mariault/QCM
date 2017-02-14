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
        $__internal_e402d2ab645785795dd1a078e46d9726d675fe28f267f20992575189c4b70327 = $this->env->getExtension("native_profiler");
        $__internal_e402d2ab645785795dd1a078e46d9726d675fe28f267f20992575189c4b70327->enter($__internal_e402d2ab645785795dd1a078e46d9726d675fe28f267f20992575189c4b70327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e402d2ab645785795dd1a078e46d9726d675fe28f267f20992575189c4b70327->leave($__internal_e402d2ab645785795dd1a078e46d9726d675fe28f267f20992575189c4b70327_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_36c5fa56f652bebefd80b442d819fbaf877be48bd31dc4e29b7f3ed778232913 = $this->env->getExtension("native_profiler");
        $__internal_36c5fa56f652bebefd80b442d819fbaf877be48bd31dc4e29b7f3ed778232913->enter($__internal_36c5fa56f652bebefd80b442d819fbaf877be48bd31dc4e29b7f3ed778232913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_36c5fa56f652bebefd80b442d819fbaf877be48bd31dc4e29b7f3ed778232913->leave($__internal_36c5fa56f652bebefd80b442d819fbaf877be48bd31dc4e29b7f3ed778232913_prof);

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
