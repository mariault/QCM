<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_16172a53491be39ca7e4bce15027578b48dd76bc600adb7e72f8010665a1c80c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_38ebaeab0bea47e1900c5718f1a7aa146f3dde1d72fd8f7671c5b0babc333cea = $this->env->getExtension("native_profiler");
        $__internal_38ebaeab0bea47e1900c5718f1a7aa146f3dde1d72fd8f7671c5b0babc333cea->enter($__internal_38ebaeab0bea47e1900c5718f1a7aa146f3dde1d72fd8f7671c5b0babc333cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38ebaeab0bea47e1900c5718f1a7aa146f3dde1d72fd8f7671c5b0babc333cea->leave($__internal_38ebaeab0bea47e1900c5718f1a7aa146f3dde1d72fd8f7671c5b0babc333cea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_43871c6e9aec7a834cba641dce14f49fd9a4cf49205a136545897522a73410f3 = $this->env->getExtension("native_profiler");
        $__internal_43871c6e9aec7a834cba641dce14f49fd9a4cf49205a136545897522a73410f3->enter($__internal_43871c6e9aec7a834cba641dce14f49fd9a4cf49205a136545897522a73410f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_43871c6e9aec7a834cba641dce14f49fd9a4cf49205a136545897522a73410f3->leave($__internal_43871c6e9aec7a834cba641dce14f49fd9a4cf49205a136545897522a73410f3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "@FOSUser/Group/list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
