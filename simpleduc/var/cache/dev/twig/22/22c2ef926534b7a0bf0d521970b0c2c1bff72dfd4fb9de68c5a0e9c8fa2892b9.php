<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_c0fc1d0d27e75a46adee4db2ae1b80d2d1133efb1aa43ae0a770ed2607f3ac43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c92b9adb9a2165d5f0ad3e2f242073b35728cee75e76de48b597dd4dacfe8d44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c92b9adb9a2165d5f0ad3e2f242073b35728cee75e76de48b597dd4dacfe8d44->enter($__internal_c92b9adb9a2165d5f0ad3e2f242073b35728cee75e76de48b597dd4dacfe8d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_c750300f391ea83af0dfd663d01135d48a4a4f67e812c04b61c29d2211af891c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c750300f391ea83af0dfd663d01135d48a4a4f67e812c04b61c29d2211af891c->enter($__internal_c750300f391ea83af0dfd663d01135d48a4a4f67e812c04b61c29d2211af891c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c92b9adb9a2165d5f0ad3e2f242073b35728cee75e76de48b597dd4dacfe8d44->leave($__internal_c92b9adb9a2165d5f0ad3e2f242073b35728cee75e76de48b597dd4dacfe8d44_prof);

        
        $__internal_c750300f391ea83af0dfd663d01135d48a4a4f67e812c04b61c29d2211af891c->leave($__internal_c750300f391ea83af0dfd663d01135d48a4a4f67e812c04b61c29d2211af891c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_84831d916bbb7e1275f965123e64244ed8ebe68a30782b286410f515cceed595 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84831d916bbb7e1275f965123e64244ed8ebe68a30782b286410f515cceed595->enter($__internal_84831d916bbb7e1275f965123e64244ed8ebe68a30782b286410f515cceed595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9ed545830e3f329f89263f51f144dc804632f5f8580efad91f40ab5191ddd137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed545830e3f329f89263f51f144dc804632f5f8580efad91f40ab5191ddd137->enter($__internal_9ed545830e3f329f89263f51f144dc804632f5f8580efad91f40ab5191ddd137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9ed545830e3f329f89263f51f144dc804632f5f8580efad91f40ab5191ddd137->leave($__internal_9ed545830e3f329f89263f51f144dc804632f5f8580efad91f40ab5191ddd137_prof);

        
        $__internal_84831d916bbb7e1275f965123e64244ed8ebe68a30782b286410f515cceed595->leave($__internal_84831d916bbb7e1275f965123e64244ed8ebe68a30782b286410f515cceed595_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
