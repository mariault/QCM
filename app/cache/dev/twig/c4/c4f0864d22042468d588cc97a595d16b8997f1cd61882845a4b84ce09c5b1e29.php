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
        $__internal_eae1544bb5ba5e73f7e6efdb01df1aceb357ca7e0c61926d608e3459d3e33832 = $this->env->getExtension("native_profiler");
        $__internal_eae1544bb5ba5e73f7e6efdb01df1aceb357ca7e0c61926d608e3459d3e33832->enter($__internal_eae1544bb5ba5e73f7e6efdb01df1aceb357ca7e0c61926d608e3459d3e33832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eae1544bb5ba5e73f7e6efdb01df1aceb357ca7e0c61926d608e3459d3e33832->leave($__internal_eae1544bb5ba5e73f7e6efdb01df1aceb357ca7e0c61926d608e3459d3e33832_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_69604661a3023dcb99e188de5d940ac489f7a17606afe2d51acbc8097a7c0a9f = $this->env->getExtension("native_profiler");
        $__internal_69604661a3023dcb99e188de5d940ac489f7a17606afe2d51acbc8097a7c0a9f->enter($__internal_69604661a3023dcb99e188de5d940ac489f7a17606afe2d51acbc8097a7c0a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_69604661a3023dcb99e188de5d940ac489f7a17606afe2d51acbc8097a7c0a9f->leave($__internal_69604661a3023dcb99e188de5d940ac489f7a17606afe2d51acbc8097a7c0a9f_prof);

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
