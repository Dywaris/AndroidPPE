<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_4ea153802fb2f63a31717ba5258b8d711f4762fd6eead3836a041a72cbe60a99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40668f1476e4163a2028d4d3abda1acf2ca1fe665b3c579f397c2268ef26f22e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40668f1476e4163a2028d4d3abda1acf2ca1fe665b3c579f397c2268ef26f22e->enter($__internal_40668f1476e4163a2028d4d3abda1acf2ca1fe665b3c579f397c2268ef26f22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_5c2bfe28173a282a39a93d84f326a1bdab10cbacfcff451f632ee6cba8b6dd67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c2bfe28173a282a39a93d84f326a1bdab10cbacfcff451f632ee6cba8b6dd67->enter($__internal_5c2bfe28173a282a39a93d84f326a1bdab10cbacfcff451f632ee6cba8b6dd67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_40668f1476e4163a2028d4d3abda1acf2ca1fe665b3c579f397c2268ef26f22e->leave($__internal_40668f1476e4163a2028d4d3abda1acf2ca1fe665b3c579f397c2268ef26f22e_prof);

        
        $__internal_5c2bfe28173a282a39a93d84f326a1bdab10cbacfcff451f632ee6cba8b6dd67->leave($__internal_5c2bfe28173a282a39a93d84f326a1bdab10cbacfcff451f632ee6cba8b6dd67_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
