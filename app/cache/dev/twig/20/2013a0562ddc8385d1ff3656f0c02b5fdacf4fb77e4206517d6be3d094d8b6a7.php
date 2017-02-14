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
        $__internal_f46e279b4269e9f7fb7cac724c987bb3a1801b25e3098b47a8e5094f57debf6d = $this->env->getExtension("native_profiler");
        $__internal_f46e279b4269e9f7fb7cac724c987bb3a1801b25e3098b47a8e5094f57debf6d->enter($__internal_f46e279b4269e9f7fb7cac724c987bb3a1801b25e3098b47a8e5094f57debf6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f46e279b4269e9f7fb7cac724c987bb3a1801b25e3098b47a8e5094f57debf6d->leave($__internal_f46e279b4269e9f7fb7cac724c987bb3a1801b25e3098b47a8e5094f57debf6d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_93f695e9a09f2797becd8fe6908531938d43e3647bf82fd9af02c93e27829d32 = $this->env->getExtension("native_profiler");
        $__internal_93f695e9a09f2797becd8fe6908531938d43e3647bf82fd9af02c93e27829d32->enter($__internal_93f695e9a09f2797becd8fe6908531938d43e3647bf82fd9af02c93e27829d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_93f695e9a09f2797becd8fe6908531938d43e3647bf82fd9af02c93e27829d32->leave($__internal_93f695e9a09f2797becd8fe6908531938d43e3647bf82fd9af02c93e27829d32_prof);

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
